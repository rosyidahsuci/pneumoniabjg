#!/usr/bin/python

DB_NAME = "pneumonia"
DB_USER = "postgres"
DB_PASS = "root"

import psycopg2
import json
import pandas as pd
import numpy as np
from scipy.cluster.hierarchy import dendrogram, fcluster
from scipy.cluster import hierarchy

#tersambung ke database postgresql
conn = psycopg2.connect(dbname=DB_NAME, user=DB_USER, password=DB_PASS)
cur = conn.cursor()

#perintah sql
cur.execute("SELECT pneumonia.jumlah_balita, pneumonia.jumlah_penderita, pneumonia.penderita_ditangani, lingkungan.rumah_sehat, lingkungan.sumber_air_minum, lingkungan.sanitasi, lingkungan.tupm, gizi.balita_ditimbang, gizi.gizi_buruk FROM pneumonia INNER JOIN lingkungan ON pneumonia.id_lingkungan = lingkungan.id_lingkungan INNER JOIN gizi ON pneumonia.id_gizi = gizi.id_gizi WHERE pneumonia.id_tahun = 3 order by pneumonia.id_kecamatan ASC;")

#mengambil data
dataset = cur.fetchall()
df = pd.DataFrame(dataset, columns=["jumlah_balita", "jumlah_penderita", "penderita_ditangani", "rumah_sehat","sumber_air_minum","sanitasi","tupm","balita_ditimbang","gizi_buruk"])

#data di normalisasi dengan metode rasio
total_balita = df['jumlah_balita'].sum()
total_penderita = df['jumlah_penderita'].sum()
total_penderitaditangani = df['penderita_ditangani'].sum()
total_rumahsehat = df['rumah_sehat'].sum()
total_sumberairminum = df['sumber_air_minum'].sum()
total_sanitasi = df['sanitasi'].sum()
total_tupm = df['tupm'].sum()
total_balitaditimbang = df['balita_ditimbang'].sum()
total_giziburuk = df['gizi_buruk'].sum()
for ind, row in df.iterrows():
  df.loc[ind, "jumlah_balita"] = row['jumlah_balita'] / total_balita
  df.loc[ind, "jumlah_penderita"] = row['jumlah_penderita'] / total_penderita
  df.loc[ind, "penderita_ditangani"] = row['penderita_ditangani'] / total_penderitaditangani
  df.loc[ind,"rumah_sehat"] = 1 - (row['rumah_sehat'] / total_rumahsehat)
  df.loc[ind,"sumber_air_minum"] = 1 - (row['sumber_air_minum'] / total_sumberairminum)
  df.loc[ind,"sanitasi"] = 1 - (row['sanitasi'] / total_sanitasi)
  df.loc[ind, "tupm"] = row['tupm'] / total_tupm
  df.loc[ind, "balita_ditimbang"] = row['balita_ditimbang'] / total_balitaditimbang
  df.loc[ind, "gizi_buruk"] = row['gizi_buruk'] / total_giziburuk

#melihat data normalisasi
Z = hierarchy.linkage(df, 'centroid')
numpy_data = np.array(fcluster(Z, t=3, criterion='maxclust'))
hasil = pd.concat([df, pd.DataFrame({'cluster':numpy_data})], axis=1)

for ind, row in hasil.iterrows():
    hasil.loc[hasil['cluster'] == 1 , 'kategori'] = 'Rendah' 
    hasil.loc[hasil['cluster'] == 2 , 'kategori'] = 'Sedang' 
    hasil.loc[hasil['cluster'] == 3 , 'kategori'] = 'Tinggi' 

# data nama kecamatan
cur.execute("SELECT nama_kecamatan from kecamatan order by id_kecamatan")
kecamatan = cur.fetchall()
kec = pd.DataFrame(kecamatan, columns=["kecamatan"])

data_new = pd.concat([hasil,kec], axis=1)
# print(data_new)

json = data_new.to_json(orient='records')
print(json)

cur.close()
conn.close()

@extends('layouts.master')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Hasil Clustering 2019</h1>
        </div>

        <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Hasil Clustering 2019</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                              <tr class="text-center">
                                <th>Id</th>
                                <th>Kecamatan</th>
                                <th>Jumlah Balita</th>
                                <th>Jumlah Penderita</th>
                                <th>Penderita Ditangani</th>
                                <th>Rumah Sehat</th>
                                <th>Sumber Air Minum</th>
                                <th>Sanitasi</th>
                                <th>TUPM</th>
                                <th>Balita Ditimbang</th>
                                <th>Gizi Buruk</th>
                                <th>Kluster</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($collections as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->kecamatan }}</td>
                                    <td>{{ $data->jumlah_balita }}</td>
                                    <td>{{ $data->jumlah_penderita }}</td>
                                    <td>{{ $data->penderita_ditangani }}</td>
                                    <td>{{ $data->rumah_sehat }}</td>
                                    <td>{{ $data->sumber_air_minum }}</td>
                                    <td>{{ $data->sanitasi }}</td>
                                    <td>{{ $data->tupm }}</td>
                                    <td>{{ $data->balita_ditimbang }}</td>
                                    <td>{{ $data->gizi_buruk }}</td>
                                    <td>{{ $data->cluster }}</td>
                                    <td>{{ $data->kategori }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                          </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
</div>
@endsection


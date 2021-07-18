@extends('layouts.master')
@section('content')

<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Faktor dan Resiko Pneumonia</h1>
        {{-- <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
          <div class="breadcrumb-item">Media Object</div>
        </div> --}}
      </div>

      <div class="section-body">
        {{-- <h2 class="section-title">Media Object</h2>
        <p class="section-lead">
          Examples for Bootstrap’s media object to construct highly repetitive components like blog comments, tweets, and the like.
        </p> --}}

        <div class="row">
          <div class="col-12">
            {{-- <div class="col-12 col-md-6 col-lg-6"> --}}
            <div class="card">
              <div class="card-header">
                <h4>Artikel</h4>
              </div>
              <div class="card-body">
                <div class="media">
                  {{-- <img class="mr-3" src="../assets/img/example-image-50.jpg" alt="Generic placeholder image"> --}}
                  <div class="media-body">
                    <h5 class="mt-0">Penyebab, Gejala, dan Faktor Pneumonia</h5>
                    <br><br>
                    <h5>Gejala Pneumonia</h5>
                    <p class="mb-0">Menurut dr. Nastisi, gejala atau tanda – tanda bahwa balita mengalami pneumonia adalah:
                        <ul type="disc">
                            <li>Anak sesak napas karena peningkatan frekuensi napas.</li>
                            <li>Takipneu atau napas cepat. Penting untuk menghitung frekuensi napas selama 1 menit. Batasan frekuensi 
                                nafas cepat pada bayi 2–12 bulan 50 kali per menit, sedangkan usia 1–5 tahun 40 kali per menit.</li>
                            <li>Balita yang mengalami perburukan gejala ditandai dengan gelisah.</li>
                            <li>Tidak mau makan/minum.</li>
                            <li>Kejang atau sianosis (kebiruan pada bibir).</li>
                            <li>Penurunan kesadaran.</li>
                            <li>Batuk (bisa disertai lendiri kehijauan, kekuningan, atau bahkan berdarah).</li>
                            <li>Demam (bisa demam ringan atau tinggi).</li>
                            <li>Menggigil.</li>
                            <li>Nyeri di dada tiap kali menarik napas atau batuk.</li>
                            <li>Sakit kepala.</li>
                            <li>Berkeringat banyak.</li>
                        </ul>
                        <br>
                        <h5>Faktor Resiko</h5> 
                        American Lung Association (ALS) mengatakan bahwa semua anak maupun orang dewasa bisa mengalami pneumonia, namun 
                        beberapa orang memang memiliki faktor risiko lebih tinggi dari orang lain. Menurut ALS, beberapa faktor risiko tersebut adalah:
                        
                        <br>
                        <ul type="disc">
                            <li>Merokok.</li>
                            <li>Pernah mengalami infeksi pernapasan karena virus (influenza, laryngitis, dll).</li>
                            <li>Kesulitan menelan (karena pernah stroke, demensia, atau kondisi neurological lainnya.</li>
                            <li>Memiliki penyakit paru-paru kronis (COPD, bronchiesctasis, cystic fibrosis).</li>
                            <li>Cerebral palsy</li>
                            <li>Penyakit serius lainnya: hati, sirosis, diabetes</li>
                            <li>Baru dioperasi atau trauma.</li>
                            <li>Pelemahan daya tahan tubuh karena penyakit, pengobatan, atau masalah autoimun.</li>
                        </ul>
                        <br><br>
                        <img src="../assets/img/news/faktor.jpg" alt="Generic placeholder image">
                        </p>
                        <br> <i>source: https://www.popmama.com/</i>
                         
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
  </div>
@endsection
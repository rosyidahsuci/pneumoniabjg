@extends('layouts.master')
@section('content')

<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Cara Mencegah Pneumonia</h1>
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
                    <h5 class="mt-0">Langkah Mudah Pencegahan Pneumonia</h5>
                    <br><br>
                    {{-- <h5>Gejala Pneumonia</h5> --}}
                    <img src="../assets/img/news/pencegahan.jpg" alt="Generic placeholder image">
                    <p class="mb-0">British Lung Foundation memiliki 3 tips ampuh untuk mencegah pneumonia, yaitu:
                        <ul type="disc">
                            <li><b>Jauhi asap rokok.</b></li>
                            <p>Orang dewasa wajib untuk hidup sehat tanpa rokok, dan anak-anak harus terbebas dari paparan asap rokok.</p> 
                            <li><b>Hidup bersih & higienis.</b></li>
                            <p>Dengan hidup higienis, maka Mama bisa mengurangi penyebaran bakteri dan virus yang bisa mengakibatkan infeksi pneumonia. 
                            Jangan lupa ajarkan balita Mama untuk menggunakan tisu ketika batuk atau bersin (dan langsung buang ke tempat sampah!).</p>
                
                            <li><b>Vaksin PCV.</b></li>
                            <p>IDAI merekomendasikan pemberian imunisasi PCV (pneumococcal conjugate vaccine) untuk anak berumur 2 bulan hingga 5 tahun.</p>
                            <li><b>Vaksin PPV.</b></li>
                            <p>Anak usia 2 tahun ke atas hingga lansia 65 tahun ke atas sangat berisiko terkena pneumonia, maka penting untuk diberikan 
                            vaksin PPV (pneumococcal polysaccharide vaccine).</p>
                        </ul>
                        <br>
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
@extends('layouts.master')
@section('content')

<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Informasi Umum</h1>
      </div>

      <div class="section-body">
        <h2 class="section-title">Artikel</h2>
        <p class="section-lead">Informasi yang harus dipahami dalam pencegahan penyakit Pneumonia Balita</p>
        <div class="row">
          <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <article class="article article-style-b">
              <div class="article-header">
                <div class="article-image" data-background="../assets/img/news/article01.jpg">
                </div>
              </div>
              <div class="article-details">
                <div class="article-title">
                  <h2><a href="{{ url('definisi_pneumonia')}}">Definisi Umum Pneumonia</a></h2>
                </div>
                <p>Pneumonia adalah bentuk infeksi pernapasan akut yang menyerang paru-paru. Paru-paru terdiri dari 
                  kantung-kantung kecil yang disebut alveoli </p>
                <div class="article-cta">
                  <a href="{{ url('definisi_pneumonia')}}">Read More <i class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            </article>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <article class="article article-style-b">
              <div class="article-header">
                <div class="article-image" data-background="../assets/img/news/article02.jpg">
                </div>
              </div>
              <div class="article-details">
                <div class="article-title">
                  <h2><a href="{{ url('transmisi')}}">Transmisi pada Pneumonia</a></h2>
                </div>
                <p>Berbagai Cara Penularan Pneumonia 
                   Ada 2 cara penularan pneumonia, yaitu penularan secara langsung dan tidak langsung</p>
                <div class="article-cta">
                  <a href="{{ url('transmisi')}}">Read More <i class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            </article>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <article class="article article-style-b">
              <div class="article-header">
                <div class="article-image" data-background="../assets/img/news/article03.jpg">
                </div>
              </div>
              <div class="article-details">
                <div class="article-title">
                  <h2><a href="{{ url('faktor')}}">Faktor dan Resiko Pneumonia</a></h2>
                </div>
                <p> 
                  American Lung Association (ALS) mengatakan bahwa semua anak maupun orang dewasa 
                  bisa mengalami pneumonia</p>
                <div class="article-cta">
                  <a href="{{ url('faktor')}}">Read More <i class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            </article>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <article class="article article-style-b">
              <div class="article-header">
                <div class="article-image" data-background="../assets/img/news/article04.jpg">
                </div>
              </div>
              <div class="article-details">
                <div class="article-title">
                  <h2><a href="{{ url('pencegahan')}}">Cara Mencegah Pneumonia</a></h2>
                </div>
                <p>Langkah Mudah Pencegahan Pneumonia. British Lung Foundation memiliki 3 tips ampuh untuk mencegah pneumonia, yaitu: </p>
                <div class="article-cta">
                  <a href="{{ url('pencegahan')}}">Read More <i class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection


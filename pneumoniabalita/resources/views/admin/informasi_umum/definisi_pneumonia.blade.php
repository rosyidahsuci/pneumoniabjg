@extends('layouts.master')
@section('content')

<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Definisi Umum</h1>
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
                    <h5 class="mt-0">Pneumonia pada Anak</h5>
                    <p class="mb-0">Pneumonia adalah bentuk infeksi pernapasan akut yang menyerang paru-paru. Paru-paru terdiri dari 
                        kantung-kantung kecil yang disebut alveoli, yang mengisi dengan udara ketika orang yang sehat bernafas. Ketika 
                        seseorang menderita pneumonia, alveoli dipenuhi dengan lendir atau cairan, yang membuat pernafasan terasa menyakitkan 
                        dan membatasi asupan oksigen.

                        <br><br> Berdasarkan data UNICEF tahun 2018, pneumonia menjadi penyebab utama infeksi kematian pada anak-anak 
                        di bawah lima tahun, menyebabkan kematian sekitar 2.400 anak per hari. Penyakit ini menyumbang sekitar 16% dari 
                        5,6 juta kematian balita, dimana menyebabkan kematian sekitar 880.000 anak pada tahun 2016. Sebagian besar 
                        korbannya berusia kurang dari 2 tahun.
                        
                        <br><br> Di Indonesia, pneumonia menduduki peringkat kedua tertinggi setelah diare sebagai penyakit penyebab 
                        kematian pada balita. Berdasarkan data dan informasi profil kesehatan Indonesia tahun 2016, sekitar 500.000 
                        anak menderita pneumonia dan 500 diantaranya meninggal dunia
                        
                        <br><br> Pada umumnya, pneumonia dikategorikan dalam penyakit menular yang ditularkan melalui udara, dengan 
                        cara penularan langsung, yaitu percikan droplet yang dikeluarkan oleh penderita saat batuk, bersin, dan berbicara 
                        langsung terhirup oleh orang di sekitar penderita, atau memegang dan menggunakan benda yang telah terkena sekresi 
                        saluran pernapasan penderita.</p>
                        <br> <i>source: https://www.alodokter.com/, http://www.darya-varia.com/</i>
                        <img src="../assets/img/news/pneumonia-0-alodokter.jpg" alt="Generic placeholder image"> 
                  </div>
                </div>
              </div>
            </div>
            {{-- <div class="card">
              {{-- <div class="card-header">
                <h4>List</h4>
              </div> --}}
              {{-- <div class="card-body">
                <ul class="list-unstyled">
                  <li class="media">
                    <img class="mr-3" src="../assets/img/example-image-50.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                      <h5 class="mt-0 mb-1">List-based media object</h5>
                      <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus oringilla. Donec lacinia congue felis in faucibus.</p>
                    </div>
                  </li>
                  <li class="media my-4">
                    <img class="mr-3" src="../assets/img/example-image-50.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                      <h5 class="mt-0 mb-1">List-based media object</h5>
                      <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus oringilla. Donec lacinia congue felis in faucibus.</p>
                    </div>
                  </li>
                  <li class="media">
                    <img class="mr-3" src="../assets/img/example-image-50.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                      <h5 class="mt-0 mb-1">List-based media object</h5>
                      <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus oringilla. Donec lacinia congue felis in faucibus.</p>
                    </div>
                  </li>
                </ul>
              </div> --}}
            {{-- </div>
          </div>  --}}
          {{-- <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
              <div class="card-header">
                <h4>Nesting</h4>
              </div>
              <div class="card-body">
                <div class="media">
                  <img class="mr-3" src="../assets/img/example-image-50.jpg" alt="Generic placeholder image">
                  <div class="media-body">
                    <h5 class="mt-0">Media heading</h5>
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>

                    <div class="media mt-3">
                      <a class="pr-3" href="#">
                        <img src="../assets/img/example-image-50.jpg" alt="Generic placeholder image">
                      </a>
                      <div class="media-body">
                        <h5 class="mt-0">Media heading</h5>
                        <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h4>Order</h4>
              </div>
              <div class="card-body">
                <div class="media">
                  <div class="media-body">
                    <h5 class="mt-0 mb-1">Media object</h5>
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                  <img class="ml-3" src="../assets/img/example-image-50.jpg" alt="Generic placeholder image">
                </div>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </section>
  </div>



@endsection
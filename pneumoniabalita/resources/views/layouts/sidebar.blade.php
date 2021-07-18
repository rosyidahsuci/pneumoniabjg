<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">Web Admin</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="nav-item dropdown {{ (request()->is('home')) ? 'active' : '' }}" >
            <a href="{{ url('home')}}"><i class="fas fa-fire"></i><span>Peta Penyebaran</span></a>
          </li>
          <li class="menu-header">Menu</li>
          <li class="nav-item {{ (request()->is('informasi-umum')) ? 'active' : '' }}">
            <a href="{{ url('informasi-umum') }}" class="nav-link">
                <i class="far fa-newspaper"></i>
                <span>Informasi Umum</span>
            </a>
          </li>
          <li class="nav-item {{ (request()->is('data_pneumonia')) ? 'active' : '' }}">
            <a href="{{ url('data_pneumonia') }}" class="nav-link">
              <i class="fas fa-briefcase-medical"></i>
                <span>Data Pneumonia</span>
            </a>
          </li>
          <li class="nav-item {{ (request()->is('data_tahun')) ? 'active' : '' }}">
            <a href="{{ url('data_tahun') }}" class="nav-link">
                <i class="fas fa-calendar-alt"></i>
                <span>Data Tahun</span>
            </a>
          </li>
          <li class="nav-item {{ (request()->is('data_kecamatan')) ? 'active' : '' }}">
            <a href="{{ url('data_kecamatan') }}" class="nav-link">
              <i class="fas fa-building"></i>
                <span>Data Kecamatan</span>
            </a>
          </li>
          <li class="nav-item {{ (request()->is('data_rumahsakit')) ? 'active' : '' }}">
            <a href="{{ url('data_rumahsakit') }}" class="nav-link">
              <i class="fas fa-hospital-alt"></i>
                <span>Data Rumah Sakit</span>
            </a>
          </li>
          <li class="nav-item {{ (request()->is('data_lingkungan')) ? 'active' : '' }}">
            <a href="{{ url('data_lingkungan') }}" class="nav-link">
              <i class="fas fa-globe-asia"></i>
                <span>Data Lingkungan</span>
            </a>
          </li>
          <li class="nav-item {{ (request()->is('data_gizi')) ? 'active' : '' }}">
            <a href="{{ url('data_gizi') }}" class="nav-link">
              <i class="fas fa-child"></i>
                <span>Data Gizi</span>
            </a>
          </li>
          
          <li class="nav-item{{ (request()->is('hasilcluster2016')) ? 'active' : '' }}">
            <a href="{{ url('hasilcluster2016') }}" class="nav-link">
              <i class="fas fa-chart-line"></i>
                <span>Hasil Cluster 2016</span>
            </a>
          </li>

          <li class="nav-item {{ (request()->is('hasilcluster2017')) ? 'active' : '' }}">
            <a href="{{ url('hasilcluster2017') }}" class="nav-link">
              <i class="fas fa-chart-line"></i>
                <span>Hasil Cluster 2017</span>
            </a>
          </li>

          <li class="nav-item {{ (request()->is('hasilcluster2018')) ? 'active' : '' }}">
            <a href="{{ url('hasilcluster2018') }}" class="nav-link">
              <i class="fas fa-chart-line"></i>
                <span>Hasil Cluster 2018</span>
            </a>
          </li>

          <li class="nav-item {{ (request()->is('hasilcluster2019')) ? 'active' : '' }}">
            <a href="{{ url('hasilcluster2019') }}" class="nav-link">
              <i class="fas fa-chart-line"></i>
                <span>Hasil Cluster 2019</span>
            </a>
          </li>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a class="btn btn-primary btn-lg btn-block btn-icon-split" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <i class="fas fa-rocket"></i>
            <span>{{ __('Logout') }}</span>
          </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
        </div>
    </aside>
  </div>
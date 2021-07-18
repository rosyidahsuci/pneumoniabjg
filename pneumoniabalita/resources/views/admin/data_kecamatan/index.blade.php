@extends('layouts.master')
@section('content')
<div class="main-content">
  @if (Session::get('toast_success'))
<div class="alert alert-success alert-has-icon alert-dismissible show fade">
    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
    <div class="alert-body">
        <button class="close" data-dismiss="alert">
            <span>×</span>
          </button>
      <div class="alert-title">Berhasil</div>
      {{ Session::get('toast_success') }}
    </div>
</div>
@endif
    <section class="section">
        <div class="section-header">
        <h1>Data Kecamatan</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('data_kecamatan.create') }}" class="btn btn-icon icon-left btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
        </div>
        </div>

        <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Kecamatan</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                              <tr class="text-center">
                                <th>Id</th>
                                <th>Nama Kecamatan</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($kecamatan as $item)
                              <tr class="text-center">
                                <td>{{ $item->id_kecamatan }}</td>
                                <td>{{ $item->nama_kecamatan }}</td>
                                <td>{{ $item->latitude }}</td>
                                <td>{{ $item->longitude }}</td>
                                <td class="center">
                                  <div class="buttons">
                                    <a href="{{ route('data_kecamatan.edit',$item->id_kecamatan)}}" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                                    <a href="{{ route('deletekecamatan',$item->id_kecamatan) }}" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
                                  </div>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                    </div>
                    <div>
                      {{$kecamatan->links()}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
</div>
@endsection


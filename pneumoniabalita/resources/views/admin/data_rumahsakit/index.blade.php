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
        <h1>Data Rumah Sakit</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('data_rumahsakit.create') }}" class="btn btn-icon icon-left btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
        </div>
        </div>

        <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Rumah Sakit</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                              <tr class="text-center">
                                <th>Id</th>
                                <th>Kecamatan</th>
                                <th>Rumah Sakit</th>
                                <th>Alamat</th>
                                <th>Nomor Telepone</th>
                                <th class="text-center" style="width: 20%">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($rumahsakit as $item)
                            <tr>
                                <td>{{ $item->id_rs }}</td>
                                <td>{{ $item->kecamatan->nama_kecamatan }}</td>
                                <td>{{ $item->nama_rs }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->no_tlp }}</td>
                                <td>
                                  <a href="{{ route('data_rumahsakit.edit',$item->id_rs)}}" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                                  <a href="{{ route('deleterumahsakit',$item->id_rs) }}" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
                                </td>
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


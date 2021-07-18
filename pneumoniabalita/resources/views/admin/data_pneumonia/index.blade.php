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
        <h1>Data Pneumonia</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('data_pneumonia.create') }}" class="btn btn-icon icon-left btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
        </div>
        </div>

        <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Pneumonia</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                              <tr class="text-center">
                                <th>Id</th>
                                <th>Tahun</th>
                                <th>Kecamatan</th>
                                <th>Jumlah Balita</th>
                                <th>Jumlah Penderita</th>
                                <th>Penderita Ditangani</th>
                                <th>Lingkungan</th>
                                <th>Gizi</th>
                                <th class="text-center" style="width:50%">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($pneumonia as $item)
                            <tr>
                                <td>{{ $item->id_pneumonia }}</td>
                                <td>{{ $item->tahun->tahun }}</td>
                                <td>{{ $item->kecamatan->nama_kecamatan }}</td>
                                <td>{{ $item->jumlah_balita }}</td>
                                <td>{{ $item->jumlah_penderita }}</td>
                                <td>{{ $item->penderita_ditangani }}</td>
                                <td>{{ $item->lingkungan->id_lingkungan }}</td>
                                <td>{{ $item->gizi->id_gizi }}</td>
                                <td>
                                  <a href="{{ route('data_pneumonia.edit',$item->id_pneumonia)}}" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                                  <a href="{{ route('deletepneumonia',$item->id_pneumonia) }}" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                          </table>
                    </div>
                    <div>
                      {{$pneumonia->links()}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
</div>
@endsection


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
        <h1>Data Gizi</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('data_gizi.create') }}" class="btn btn-icon icon-left btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
        </div>
        </div>

        <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Gizi</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                              <tr class="text-center">
                                <th>Id</th>
                                <th>Tahun</th>
                                <th>Kecamatan</th>
                                <th>Balita Ditimbang</th>
                                <th>Gizi Buruk</th>
                                <th class="text-center"style="width: 20%">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($gizi as $item)
                            <tr>
                                <td>{{ $item->id_gizi }}</td>
                                <td>{{ $item->tahun->tahun }}</td>
                                <td>{{ $item->kecamatan->nama_kecamatan }}</td>
                                <td>{{ $item->balita_ditimbang }}</td>
                                <td>{{ $item->gizi_buruk }}</td>
                                <td>
                                  <a href="{{ route('data_gizi.edit',$item->id_gizi)}}" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                                  <a href="{{ route('deletegizi',$item->id_gizi) }}" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                          </table>
                    </div>
                    <div>
                      {{$gizi->links()}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
</div>
@endsection


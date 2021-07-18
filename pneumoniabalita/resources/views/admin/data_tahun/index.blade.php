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
        <h1>Data Tahun</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('data_tahun.create') }}" class="btn btn-icon icon-left btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
        </div>
        </div>

        <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Tahun</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                              <tr class="text-center">
                                <th>
                                  Id
                                </th>
                                <th>Tahun</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($datathn as $item)
                              <tr class="text-center">
                                <td>{{ $item->id_tahun }}</td>
                                <td>{{ $item->tahun }}</td>
                                <td class="center">
                                  <div class="buttons">
                                    <a href="{{ route('data_tahun.edit',$item->id_tahun)}}" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                                    <a href="{{ route('deletetahun',$item->id_tahun) }}" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
                                  </div>
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


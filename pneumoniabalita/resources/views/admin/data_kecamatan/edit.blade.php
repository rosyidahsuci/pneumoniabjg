@extends('layouts.master')
@section('content')
<div class="main-content" style="min-height: 564px;">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Kecamatan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Kecamatan</a></div>
            </div>
            </div>

            <div class="section-body">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <form action="{{ route('data_kecamatan.update',$kecamatan->id_kecamatan)}}" method="post">
                            @csrf
                            @method('put')
                        <div class="card-header">
                            <h4>Data Kecamatan</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-0">
                            <label>Id Kecamatan</label>
                            <textarea name="id_kecamatan" class="form-control" required="">{{ $kecamatan->id_kecamatan }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Nama Kecamatan</label>
                                <input name="nama_kecamatan" id="nama_kecamatan" class="form-control" value="{{ $kecamatan->nama_kecamatan }}">
                            </div>
                            <div class="form-group">
                                <label>Latitude</label>
                                <input name="latitude" id="latitude" class="form-control" value="{{ $kecamatan->latitude }}">
                            </div>
                            <div class="form-group">
                                <label>Longitude</label>
                                <input name="longitude" id="longitude" class="form-control" value="{{ $kecamatan->longitude }}">
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Ubah Data</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('script')

@endsection
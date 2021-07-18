@extends('layouts.master')
@section('content')
<div class="main-content" style="min-height: 564px;">
    <section class="section">
        <div class="section-header">
            <h1>Data Kecamatan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Kecamatan</a></div>
            </div>
            </div>
            <div class="section-body">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <form action="{{ route('data_kecamatan.store') }}" method="post">
                            @csrf
                        <div class="card-header">
                            <h4>Tambah Data Kecamatan</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Id Kecamatan</label>
                                <input name="id_kecamatan" id="id_kecamatan" class="form-control" required="" />
                            </div>
                            <div class="form-group">
                                <label>Nama Kecamatan</label>
                                <input name="nama_kecamatan" id="nama_kecamatan" class="form-control" required="" />
                            </div>
                            <div class="form-group">
                                <label>Latitude</label>
                                <input name="latitude" id="latitude" class="form-control" required="" />
                            </div>
                            <div class="form-group">
                                <label>Longitude</label>
                                <input name="longitude" id="longitude" class="form-control" required="" />
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
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
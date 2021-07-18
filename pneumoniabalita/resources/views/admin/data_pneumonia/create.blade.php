@extends('layouts.master')
@section('content')
<div class="main-content" style="min-height: 564px;">
    <section class="section">
        <div class="section-header">
            <h1>Data Pneumonia</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Pneumonia</a></div>
            </div>
            </div>
            <div class="section-body">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <form action="{{ route('data_pneumonia.store') }}" method="post">
                            @csrf
                        <div class="card-header">
                            <h4>Tambah Data Pneumonia</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Id</label>
                                <input name="id_pneumonia" id="id_pneumonia" class="form-control" required="" />
                            </div>
                            <div class="form-group">
                                <label>Tahun</label>
                                <select class="form-control" name="id_tahun" id="id_tahun">
                                    <option disabled value>Pilih Tahun</option>
                                    @foreach($tahun as $item)
                                    <option value="{{ $item->id_tahun }}">{{ $item->tahun }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kecamatan</label>
                                <select class="form-control" name="id_kecamatan" id="id_kecamatan">
                                    <option disabled value>Pilih Kecamatan</option>
                                    @foreach($kecamatan as $item)
                                    <option value="{{ $item->id_kecamatan }}">{{ $item->nama_kecamatan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Balita</label>
                                <input name="jumlah_balita" id="jumlah_balita" class="form-control" required="" />
                            </div> 
                            <div class="form-group">
                                <label>Jumlah Penderita</label>
                                <input name="jumlah_penderita" id="jumlah_penderita" class="form-control" required="" />
                            </div>
                            <div class="form-group">
                                <label>Penderita Ditangani</label>
                                <input name="penderita_ditangani" id="penderita_ditangani" class="form-control" required="" />
                            </div>
                            <div class="form-group">
                                <label>Lingkungan</label>
                                <select class="form-control" name="id_lingkungan" id="id_lingkungan">
                                    <option disabled value>Pilih ID Lingkungan</option>
                                    @foreach($lingkungan as $item)
                                    <option value="{{ $item->id_lingkungan }}">{{ $item->id_lingkungan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Gizi</label>
                                <select class="form-control" name="id_gizi" id="id_gizi">
                                    <option disabled value>Pilih ID Gizi</option>
                                    @foreach($gizi as $item)
                                    <option value="{{ $item->id_gizi }}">{{ $item->id_gizi }}</option>
                                    @endforeach
                                </select>
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
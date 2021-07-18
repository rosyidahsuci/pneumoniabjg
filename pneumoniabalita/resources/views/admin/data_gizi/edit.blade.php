@extends('layouts.master')
@section('content')
<div class="main-content" style="min-height: 564px;">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Gizi</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Gizi</a></div>
            </div>
            </div>

            <div class="section-body">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <form action="{{ route('data_gizi.update',$gizi->id_gizi)}}" method="post">
                            @csrf
                            @method('put')
                        <div class="card-header">
                            <h4>Data Gizi</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-0">
                            <label>Id</label>
                            <textarea name="id_gizi" class="form-control" required="">{{ $gizi->id_gizi }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="txt-label">Tahun</label>
                                <select class="form-control" name="id_tahun" id="id_tahun">
                                    <option disabled value>Pilih Tahun</option>
                                    <option value="{{ $gizi->id_tahun }}">{{ $gizi->tahun->tahun }}</option>
                                    @foreach($tahun as $item)
                                        <option value="{{ $item->id_tahun }}">{{ $item->tahun }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="txt-label">Kecamatan</label>
                                <select class="form-control" name="id_kecamatan" id="id_kecamatan">
                                    <option disabled value>Pilih Kecamatan</option>
                                    <option value="{{ $gizi->id_kecamatan }}">{{ $gizi->kecamatan->nama_kecamatan }}</option>
                                    @foreach($kecamatan as $item)
                                        <option value="{{ $item->id_kecamatan }}">{{ $item->nama_kecamatan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Balita Ditimbang</label>
                                <input name="balita_ditimbang" id="balita_ditimbang" class="form-control" value="{{ $gizi->balita_ditimbang }}">
                            </div>
                            <div class="form-group">
                                <label>Gizi Buruk</label>
                                <input name="gizi_buruk" id="gizi_buruk" class="form-control" value="{{ $gizi->gizi_buruk }}">
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
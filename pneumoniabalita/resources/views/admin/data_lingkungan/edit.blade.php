@extends('layouts.master')
@section('content')
<div class="main-content" style="min-height: 564px;">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Lingkungan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Lingkungan</a></div>
            </div>
            </div>

            <div class="section-body">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <form action="{{ route('data_lingkungan.update',$lingkungan->id_lingkungan)}}" method="post">
                            @csrf
                            @method('put')
                        <div class="card-header">
                            <h4>Data Lingkungan</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-0">
                            <label>Id</label>
                            <textarea name="id_lingkungan" class="form-control" required="">{{ $lingkungan->id_lingkungan }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="txt-label">Tahun</label>
                                <select class="form-control" name="id_tahun" id="id_tahun">
                                    <option disabled value>Pilih Tahun</option>
                                    <option value="{{ $lingkungan->id_tahun }}">{{ $lingkungan->tahun->tahun }}</option>
                                    @foreach($tahun as $item)
                                        <option value="{{ $item->id_tahun }}">{{ $item->tahun }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="txt-label">Kecamatan</label>
                                <select class="form-control" name="id_kecamatan" id="id_kecamatan">
                                    <option disabled value>Pilih Kecamatan</option>
                                    <option value="{{ $lingkungan->id_kecamatan }}">{{ $lingkungan->kecamatan->nama_kecamatan }}</option>
                                    @foreach($kecamatan as $item)
                                        <option value="{{ $item->id_kecamatan }}">{{ $item->nama_kecamatan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Rumah Sehat</label>
                                <input name="rumah_sehat" id="rumah_sehat" class="form-control" value="{{ $lingkungan->rumah_sehat }}">
                            </div>
                            <div class="form-group">
                                <label>Sumber Air Minum</label>
                                <input name="sumber_air_minum" id="sumber_air_minum" class="form-control" value="{{ $lingkungan->sumber_air_minum }}">
                            </div>
                            <div class="form-group">
                                <label>Sanitasi</label>
                                <input name="sanitasi" id="sanitasi" class="form-control" value="{{ $lingkungan->sanitasi }}">
                            </div>
                            <div class="form-group">
                                <label>TUPM</label>
                                <input name="tupm" id="tupm" class="form-control" value="{{ $lingkungan->tupm }}">
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
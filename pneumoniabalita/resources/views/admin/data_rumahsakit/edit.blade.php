@extends('layouts.master')
@section('content')
<div class="main-content" style="min-height: 564px;">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Rumah Sakit</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Rumah Sakit</a></div>
            </div>
            </div>

            <div class="section-body">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <form action="{{ route('data_rumahsakit.update',$rumahsakit->id_rs)}}" method="post">
                            @csrf
                            @method('put')
                        <div class="card-header">
                            <h4>Data Kecamatan</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-0">
                            <label>Id</label>
                            <textarea name="id_rs" class="form-control" required="">{{ $rumahsakit->id_rs }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="txt-label">Kecamatan</label>
                                <select class="form-control" name="kecamatan_id" id="kecamatan_id">
                                    <option disabled value>Pilih Kecamatan</option>
                                    <option value="{{ $rumahsakit->id_kecamatan }}">{{ $rumahsakit->kecamatan->nama_kecamatan }}</option>
                                    @foreach($kecamatan as $item)
                                        <option value="{{ $item->id_kecamatan }}">{{ $item->nama_kecamatan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Rumah Sakit</label>
                                <input name="nama_rs" id="nama_rs" class="form-control" value="{{ $rumahsakit->nama_rs }}">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input name="alamat" id="alamat" class="form-control" value="{{ $rumahsakit->alamat }}">
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepone</label>
                                <input name="no_tlp" id="no_tlp" class="form-control" value="{{ $rumahsakit->no_tlp }}">
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
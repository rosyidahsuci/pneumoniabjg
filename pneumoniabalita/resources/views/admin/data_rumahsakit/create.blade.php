@extends('layouts.master')
@section('content')
<div class="main-content" style="min-height: 564px;">
    <section class="section">
        <div class="section-header">
            <h1>Data Rumah Sakit</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Rumah Sakit</a></div>
            </div>
            </div>
            <div class="section-body">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <form action="{{ route('data_rumahsakit.store') }}" method="post">
                            @csrf
                        <div class="card-header">
                            <h4>Tambah Data Rumah Sakit</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Id</label>
                                <input name="id_rs" id="id_rs" class="form-control" required="" />
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
                                <label>Nama Rumah Sakit</label>
                                <input name="nama_rs" id="nama_rs" class="form-control" required="" />
                            </div> 
                            <div class="form-group">
                                <label>Alamat</label>
                                <input name="alamat" id="alamat" class="form-control" required="" />
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepone</label>
                                <input name="no_tlp" id="no_tlp" class="form-control" required="" />
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
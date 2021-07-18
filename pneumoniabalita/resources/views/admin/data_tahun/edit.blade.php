@extends('layouts.master')
@section('content')
<div class="main-content" style="min-height: 564px;">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Tahun</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Tahun</a></div>
            </div>
            </div>

            <div class="section-body">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <form action="{{ route('data_tahun.update',$thn->id_tahun)}}" method="post">
                            @csrf
                            @method('put')
                        <div class="card-header">
                            <h4>Data Tahun</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-0">
                            <label>Id Tahun</label>
                            <textarea name="id_tahun" class="form-control" required="">{{ $thn->id_tahun }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Tahun</label>
                                <input name="tahun" id="name" class="form-control" value="{{ $thn->tahun }}">
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
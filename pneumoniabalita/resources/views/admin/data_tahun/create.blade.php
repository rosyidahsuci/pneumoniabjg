@extends('layouts.master')
@section('content')
<div class="main-content" style="min-height: 564px;">
    <section class="section">
        <div class="section-header">
            <h1>Data Tahun</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Tahun</a></div>
            </div>
            </div>
            <div class="section-body">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <form action="{{ route('data_tahun.store') }}" method="post">
                            @csrf
                        <div class="card-header">
                            <h4>Tambah Data Tahun</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Id Tahun</label>
                                <input name="id_tahun" id="id_tahun" class="form-control" required="" />
                            </div>
                            <div class="form-group">
                                <label>Tahun</label>
                                <input name="tahun" id="tahun" class="form-control" required="" />
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
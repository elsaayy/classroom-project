@extends('main.index')
@section('content')
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center">Create Mahasiswa</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" method="POST" action="{{ route('mahasiswa.store') }}">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Nama</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="nama" name="nama"
                                        class="form-control @error('nama') is invalid
                                        
                                    @enderror"
                                        value="{{ old('nama') }}" placeholder="Nama">
                                    @error('nama')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label>Nim</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="number" id="nim"
                                        class="form-control @error('nim') is invalid    
                                    @enderror"
                                        name="nim" value="{{ old('nim') }}" placeholder="Nim">
                                    @error('nim')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label>Telepon</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="number" id="telepon"
                                        class="form-control @error('telepon') is invalid
                                    @enderror"
                                        name="telepon" value="{{ old('telepon') }}" placeholder="telepon">
                                    @error('telepon')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label>Alamat</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="alamat"
                                        class="form-control @error('alamat') is invalid
                                        
                                    @enderror"
                                        name="alamat" value="{{ old('alamat') }}" placeholder="Alamat">
                                    @error('alamat')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

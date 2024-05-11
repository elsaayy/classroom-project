@extends('main.index')
@section('content')
    <div class="col-md-12 col-12">
                <h4 class="card-title text-center mb-4">Ubah Profile</h4>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" method="POST">
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
                                    <label>Email</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="email" name="email"
                                        class="form-control @error('email') is invalid          
                                    @enderror"
                                        value="{{ old('email') }}" placeholder="email">
                                    @error('email')
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
@endsection

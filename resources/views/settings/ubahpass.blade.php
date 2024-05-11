@extends('main.index')
@section('content')
    <div class="col-md-12 col-12">
        <h4 class="card-title text-center mb-4">Ubah Password</h4>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" method="POST">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Password Lama</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="passold" name="passold"
                                    class="form-control @error('passold') is invalid          
                                    @enderror"
                                    value="{{ old('passold') }}" placeholder="Password Lama">
                                @error('passold')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label>Password Baru</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="passnew" name="passnew"
                                    class="form-control @error('passnew') is invalid          
                                    @enderror"
                                    value="{{ old('passnew') }}" placeholder="Password Baru">
                                @error('passnew')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label>Konfirmasi Password Baru</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="konfirmasi" name="konfirmasi"
                                    class="form-control @error('konfirmasi') is invalid          
                                    @enderror"
                                    value="{{ old('konfirmasi') }}" placeholder="Konfirmasi Password Baru">
                                @error('konfirmasi')
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

@extends('main.index')
@section('content')
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center">Create Mahasiswa</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" method="POST" action="{{ route('mengajar.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Teacher</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="teacher" name="teacher"
                                        class="form-control @error('teacher') is invalid
                                    @enderror"
                                        value="{{ old('teacher') }}" placeholder="teacher">
                                    @error('teacher')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label>Title</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="title"
                                        class="form-control @error('title') is invalid
                                    @enderror"
                                        name="title" value="{{ old('title') }}" placeholder="title">
                                    @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label>Desc</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="description"
                                        class="form-control @error('description') is invalid
                                    @enderror"
                                        name="description" value="{{ old('description') }}" placeholder="description" />
                                    @error('description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label>Image</label>
                                 </div>
                                <div class="col-md-8 form-group">
                                    <input type="file" id="image"
                                        class="form-control @error('image') is invalid
                                    @enderror"
                                        name="image" value="{{ old('image') }}" >
                                    @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-sm-12 d-flex justify-content-end">
                                    <button type="submit"  class="btn btn-primary me-1 mb-1">Submit</button>
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

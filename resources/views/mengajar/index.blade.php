{{-- PAGE CONTENT --}}

@extends('main.index')
@section('title', 'Mengajar')
@section('content')
    <div class="page-content">
        <section class="row">
            @foreach ($datas as $data)
            <div class="col-md-4">
                <div class="card border-gray-200 rounded">
                    <div class="card-header bg-danger text-white p-3">
                        <div class="card-title">
                            <a href="{{ route('mengajar.detail', $data->id) }}" class="text-decoration-none text-white">{{$data->title}}</a>
                        </div>
                    </div>
                    <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                                <img src="{{ asset('source/assets/images/faces/1.jpg') }}" alt="Face 1">
                            </div>
                            <span>{{$data->teacher}}</span>
                        </div>
                    </div>
                    <div class="py-4 card-footer d-flex justify-content-between bg-white p-3"></div>
                </div>
            </div>
            @endforeach
        </section>
        <div class="btn-plus d-flex justify-content-end">
            <a href="{{ route('mengajar.create') }}" class="btn btn-success">tambah kelas</a>
        </div>
    </div>
@endsection
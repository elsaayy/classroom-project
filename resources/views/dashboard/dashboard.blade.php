{{-- PAGE CONTENT --}}

@extends('main.index')
@section('title', 'Dashboard')
@section('content')
    <div class="page-content">
        <section class="row">
            @foreach ($datas as $data)
            <div class="col-md-4">
                <div class="card border-gray-200 rounded">
                    <div class="card-header {{ $random }} text-white p-3">
                        <div class="card-title">{{$data->title}}</div>
                    </div>
                    <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('source/assets/images/faces/1.jpg') }}" alt="Face 1">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">{{$data->teacher}}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-white p-3">
                        <a class="m-0 text-decoration-none" href="{{route ('students.index', $data->id) }}">Jumlah Siswa : {{ $student }}</a>
                        <a class="m-0 text-decoration-none" href="#">Total Tugas : 7</a>
                    </div>
                </div>
            </div>
        @endforeach
        </section>
    </div>
@endsection

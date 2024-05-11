@extends('main.index')
@section('content')
    <!-- Basic Tables start -->
    <section class="container">
        <div class="row d-flex justify-content-center mb-5" id="basic-table">
            <div class="col-md-10">
                <h2 class="mb-3">Pengajar</h2>
                <hr class="text-warning">
                </hr>
                <div class="d-flex align-items-center"></div>
                <div class="avatar avatar-md">
                    <img src="{{ asset('source/assets/images/faces/1.jpg') }}" alt="Face 1">
                    <div class="ms-3 name">
                        @foreach ($students as $student)
                            <span class="#">{{ $student->classes->teacher }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="mb-2">Teman Sekelas</h2>
                    <span class="mb-2">{{count($students)}} Siswa</span>
                </div>
                <hr class="text-warning">
                </hr>
                @foreach ($students as $student)
                <div class="row">
                    <div class="col-md-10">
                        <div class="avatar avatar my-3">
                            <img src="{{ asset('source/assets/images/faces/3.jpg') }}" alt="Face 1">
                            <div class="ms-3 name">
                                <span class="#">{{$student->name}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@extends('main.index')
@section('content')
    <div class="col-md-12 col-12">
            <div class="mb-4">
                <h2 class="card-title text-center">Setelan</h2>
            </div>
            <div class="card-content">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="text-center">Ubah Profile</h4>
                          <a href="{{route('settings.editprofile')}}" class="btn btn-outline-primary">Ubah Profile</a>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="text-center">Ubah Password</h4>
                          <a href="{{route('settings.editpass')}}" class="btn btn-outline-primary">Ubah Password</a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
    </div>
@endsection

@extends('template.admin')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
    <div class="alert alert-success">
        Selamat datang di Admin Dashboard 🎉
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card text-bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Users</h5>
                    {{-- <p class="card-text">Total: {{ $usersCount }}</p> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

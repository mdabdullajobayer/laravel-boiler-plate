@extends('backend.layouts.master')

@section('content')
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, welcome back! {{ Auth::user()->name }}</h4>
                <p class="mb-0"></p>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">{{ __('Dashboard') }}</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{ __('You are logged in!') }}

                @canany(['create-role', 'edit-role', 'delete-role'])
                    <a class="btn btn-primary" href="{{ route('roles.index') }}">
                        <i class="bi bi-person-fill-gear"></i> Manage Roles</a>
                @endcanany
                @canany(['create-user', 'edit-user', 'delete-user'])
                    <a class="btn btn-success" href="{{ route('users.index') }}">
                        <i class="bi bi-people"></i> Manage Users</a>
                @endcanany
                @canany(['create-product', 'edit-product', 'delete-product'])
                    <a class="btn btn-warning" href="{{ route('products.index') }}">
                        <i class="bi bi-bag"></i> Manage Products</a>
                @endcanany
                @canany(['create-courses', 'edit-courses', 'delete-courses'])
                    <a class="btn btn-warning" href="{{ route('courses.index') }}">
                        <i class="bi bi-bag"></i> Manage couser</a>
                @endcanany
                <p>&nbsp;</p>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <!-- Sidebar -->
            <div class="card">
                <div class="card-header">{{ __('Sidebar') }}</div>

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="#">Dashboard</a></li>
                        <li class="list-group-item"><a href="#">Profile</a></li>
                        <li class="list-group-item"><a href="#">Settings</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <!-- Main content -->
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

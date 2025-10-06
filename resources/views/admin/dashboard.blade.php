@extends('layouts.master')

@section('title', 'Admin Dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <h1 class="mb-4">Welcome, Admin!</h1>
        <p>You can manage users, events, and platform settings here.</p>

        <!-- Example cards -->
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card text-bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Users</h5>
                        <p class="card-text">Manage all registered users.</p>
                        <a href="#" class="btn btn-light btn-sm">Go</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Events</h5>
                        <p class="card-text">Create or manage events.</p>
                        <a href="#" class="btn btn-light btn-sm">Go</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-bg-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Reports</h5>
                        <p class="card-text">View platform analytics and reports.</p>
                        <a href="#" class="btn btn-light btn-sm">Go</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

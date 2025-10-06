@extends('layouts.master')

@section('title', 'User Dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <h1 class="mb-4">Welcome, {{ auth()->user()->name }}!</h1>
        <p>Discover events you can attend and manage your profile.</p>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card text-bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Events</h5>
                        <p class="card-text">Browse upcoming events.</p>
                        <a href="#" class="btn btn-light btn-sm">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-bg-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Profile</h5>
                        <p class="card-text">Update your profile info.</p>
                        <a href="#" class="btn btn-light btn-sm">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.master')

@section('title', 'Manager Dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <h1 class="mb-4">Welcome, Event Manager!</h1>
        <p>Here you can manage your assigned events.</p>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card text-bg-info mb-3">
                    <div class="card-body">
                        <h5 class="card-title">My Events</h5>
                        <p class="card-text">View and manage your events.</p>
                        <a href="#" class="btn btn-light btn-sm">Go</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-bg-secondary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Attendees</h5>
                        <p class="card-text">Manage attendees for your events.</p>
                        <a href="#" class="btn btn-light btn-sm">Go</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

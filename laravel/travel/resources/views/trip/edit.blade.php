@extends('layouts.admin_base')

@section('title', 'Edit Trip')

@section('content')
    <div class="card">
        <h5 class="card-header">Edit Trip</h5>
        <div class="card-body">
            <!-- Your edit form goes here -->
            <form action="{{ route('trip.update', $trip->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $trip->name }}" required>
                </div>

                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" id="location" name="location" value="{{ $trip->location }}" required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ $trip->price }}" required>
                </div>

                <!-- Add more fields as needed -->

                <button type="submit" class="btn btn-primary">Update Trip</button>
            </form>
        </div>
    </div>
@endsection

@section('styles')
    <!-- Add any additional styles if needed -->
@endsection

@section('scripts')
    <!-- Add any additional scripts if needed -->
@endsection
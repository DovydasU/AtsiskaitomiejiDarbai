@extends('layouts.admin_base')

@section('title', 'Edit Trip')

@section('content')
    <div class="card">
        <h5 class="card-header">Edit Trip</h5>
        <div class="card-body">
            <!-- Your create form goes here -->
            <form action="{{ route('trip.update', $trip->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $trip->name }}" required>
                </div>

                <div class="mb-3">
                    <label for="choice" class="form-label">Select a Choice</label>
                    <select class="form-select" id="choice" name="choice" required>
                        @foreach ($categories as $catEdit)
                            <option value="{{ $catEdit->id }}" {{ $catEdit->id == $trip->category_id ? 'selected' : '' }}>
                                {{ $catEdit->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" id="location" name="location" value="{{ $trip->location }}" required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ $trip->price }}" required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*">
                </div>                

                <div class="mb-3">
                    <label for="space" class="form-label">Space</label>
                    <input type="number" class="form-control" id="space" name="space" value="{{ $trip->space }}" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ $trip->description }}" required>
                </div>

                <div class="mb-3">
                    <label for="contact" class="form-label">Contact</label>
                    <input type="text" class="form-control" id="contact" name="contact" value="{{ $trip->contact }}" required>
                </div>

                <div class="mb-3">
                    <label for="start" class="form-label">Start</label>
                    <input type="text" class="form-control" id="start" name="start" value="{{ $trip->start }}" required>
                </div>

                <div class="mb-3">
                    <label for="end" class="form-label">End</label>
                    <input type="text" class="form-control" id="end" name="end" value="{{ $trip->end }}" required>
                </div>

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

@extends('layouts.admin_base')

@section('title', 'Create Trip')

@section('content')
    @can('create', \App\Models\Trip::class)
        <div class="card">
            <h5 class="card-header">Create Trip</h5>
            <div class="card-body">
                <form action="{{ route('trip.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="choice" class="form-label">Select a Choice</label>
                        <select class="form-select" id="choice" name="category_id" required>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="location" name="location" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="space" class="form-label">Space</label>
                        <input type="number" class="form-control" id="space" name="space" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="contact" class="form-label">Contact</label>
                        <input type="text" class="form-control" id="contact" name="contact" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="start" class="form-label">Start</label>
                        <input type="date" class="form-control" id="start" name="start" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="end" class="form-label">End</label>
                        <input type="date" class="form-control" id="end" name="end" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Trip</button>
                </form>
            </div>
        </div>
    @else
        <p>You do not have permission to create trips.</p>
    @endcan
@endsection

@section('styles')
@endsection

@section('scripts')
@endsection
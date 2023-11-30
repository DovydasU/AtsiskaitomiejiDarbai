@extends('layouts.admin_base')

@section('title', 'Edit Category')

@section('content')
    <div class="card">
        <h5 class="card-header">Edit Category</h5>
        <div class="card-body">
            <!-- Your create form goes here -->
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="" required>
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

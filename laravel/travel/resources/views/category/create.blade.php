@extends('layouts.admin_base')

@section('title', 'Create Category')

@section('content')
    @can('create-category')
        <div class="card">
            <h5 class="card-header">Create Category</h5>
            <div class="card-body">
                <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Category</button>
                </form>
            </div>
        </div>
    @else
        <p>You do not have permission to create categories.</p>
    @endcan
@endsection

@section('styles')
@endsection

@section('scripts')
@endsection
@extends('layouts.admin_base')

@section('title', 'Category Table')

@section('content')
    <div class="card">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-header green-header">Kategorijos</h5>
            {{-- @can('create-category')
                <a href="{{ route('category.create') }}" class="btn btn-lg btn-success" id="createButton">Create</a>
            @endcan --}}
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            </tr>
            </thead>
            @foreach ($category_list as $cat)
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $cat->id }}</strong></td>
                    <td>{{ $cat->name }}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                @can('delete-category', $cat)
                                    <form action="{{ route('category.destroy', $cat->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item"
                                            onclick="return confirm('Are you sure you want to delete this category?')">
                                            <i class="bx bx-trash me-1"></i> Delete
                                        </button>
                                    </form>
                                @endcan
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('styles')
    <style>
        #createButton {
            width: 250px;
            margin-right: 18px;
        }

        .green-header {
            color: #aef359;
        }
    </style>
@endsection

@section('scripts')
@endsection

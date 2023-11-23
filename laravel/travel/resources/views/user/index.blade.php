@extends('layouts.admin_base')

@section('title', 'User Table')

@section('content')
    <div class="card">
        <h5 class="card-header">Vartotojai</h5>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            </tr>
            </thead>
            @foreach ($user_list as $user)
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->name }}</strong></td>
                    <td>{{ $user->email }}</td>
                    <td><span class="badge bg-label-primary me-1">Active</span></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-show me-1"></i> Show</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>Delete</a>
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
@endsection

@section('scripts')
@endsection

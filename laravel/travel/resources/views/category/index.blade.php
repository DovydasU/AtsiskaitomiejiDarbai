@extends('layouts.admin_base')

@section('title', 'User Table')

@section('content')
    <div class="card">
        <h5 class="card-header">Kategorijos</h5>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Kategorijos Kelionės</th>
                </tr>
            </thead>
            </tr>
            </thead>
            @foreach ($category_list as $cat)
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $cat->id }}</strong></td>
                    <td>{{ $cat->name }}</td>
                    <td>Kategorijos Kelionės</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
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
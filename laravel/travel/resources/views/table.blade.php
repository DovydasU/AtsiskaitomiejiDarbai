@extends('layouts.admin_base')

@section('title', 'User Table')

@section('content')
    <div class="card">
        <h5 class="card-header">Vartotojai</h5>
        <table class="table">
            <thead>
                <tr>
                    <th>name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            </tr>
            </thead>
            @foreach ($user_list as $user)
                @include('user_component')
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('styles')
@endsection

@section('scripts')
@endsection

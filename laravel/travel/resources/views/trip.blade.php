@extends('layouts.admin_base')

@section('title', 'Trips Table')

@section('content')
    <div class="card">
        <h5 class="card-header">Kelionės</h5>
        <table class="table">
            <thead>
                <tr>
                    <th>name</th>
                    <th>location</th>
                    <th>price</th>
                    <th>space</th>
                    <th>description</th>
                    <th>contact</th>
                    <th>Actions</th>
                </tr>
            </thead>
            @foreach ($trip_list as $trip)
                @include('trip_component')
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('styles')
@endsection

@section('scripts')
@endsection

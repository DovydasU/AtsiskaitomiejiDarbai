@extends('layouts.admin_base')

@section('title', 'Trips Table')

@section('content')
    <div class="card">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-header green-header">Kelionės</h5>
            <a href="{{ route('trip.create') }}" class="btn btn-lg btn-success" id="createButton">Create</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>image</th>
                    <th>name</th>
                    <th>location</th>
                    <th>price</th>
                    <th>space</th>
                    <th>description</th>
                    <th>contact</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trip_list as $trip)
                <tr>
                    <td><img src="{{ asset('images/trip/' . $trip->image) }}" alt="" width="50" height="50"></td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $trip->name }}</strong></td>
                    <td>{{ $trip->location }}</td>
                    <td>{{ $trip->price }}</td>
                    <td>{{ $trip->space }}</td>
                    <td>{{ $trip->description }}</td>
                    <td>{{ $trip->contact }}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('trip.edit', $trip->id) }}"><i
                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="{{ route('trip.show', $trip->id) }}"><i
                                        class="bx bx-show me-1"></i> Show</a>
                                <form action="{{ route('trip.destroy', $trip->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item"
                                        onclick="return confirm('Are you sure you want to delete this trip?')">
                                        <i class="bx bx-trash me-1"></i> Delete
                                    </button>
                                </form>
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
        #createButton{
            width: 250px;
            margin-right: 18px;
        }

        .green-header {
            color: #aef359;
        }
    </style>
@endsection

@section('scripts')
    <!-- Add any additional scripts if needed -->
@endsection
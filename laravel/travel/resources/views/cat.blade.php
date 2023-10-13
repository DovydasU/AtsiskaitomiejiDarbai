@extends('layouts.admin_base')

@section('title', 'Category Table')

@section('content')
    <div class="card">
        <h5 class="card-header">Kategorijos</h5>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                </tr>
            </thead>
            {{-- @foreach ($trip_list as $trip)
                @include('trip_component')
            @endforeach --}}
            </tbody>
        </table>
    </div>
@endsection

@section('styles')
@endsection

@section('scripts')
@endsection
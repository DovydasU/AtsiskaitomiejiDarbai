<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Trip;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTripRequest;
use App\Http\Requests\UpdateTripRequest;
use Illuminate\Support\Facades\Log;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();

        if ($user->roles->pluck('name')->contains('svetaines administratorius')) {
            $trip_list = Trip::all();
        } elseif ($user->roles->pluck('name')->contains('kelioniu vadovas')) {
            $trip_list = Trip::where('user_id', $user->id)->get();
        } else {
            abort(403, 'Unauthorized action.');
        }

        return view('trip.index', compact('trip_list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('trip.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTripRequest $request)
    {
        try {
            $tripData = $request->validated();
            $tripData['image'] = "testing";
            $tripData['space_used'] = 0;
            $tripData['user_id'] = auth()->id();

            $trip = Trip::create($tripData);

            $name = $trip->id . '-' . time() . '-' . $request->image->getClientOriginalName();
            $name = str_replace(' ', '', $name);
            $request->image->storeAs('trip', $name, 'public');
            $trip->image = $name;
            $trip->save();

            // Log success or any other information
            Log::info('Trip created successfully', ['trip_id' => $trip->id]);

            return redirect()->route('trip.index')->with('success', 'Trip has been created successfully.');
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error creating trip: ' . $e->getMessage());
            dd($e->getMessage());
            // Display a generic error message or redirect with an error status
            return redirect()->route('trip.index')->with('error', 'Error creating trip. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Trip $trip)
    {
        return view('trip.show', compact('trip'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trip $trip)
    {
        $categories = Category::all();
        return view('trip.edit', compact('trip', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTripRequest $request, Trip $trip)
    {
        $tripData = $request->validated();

        // Handle image update only if a new image is provided
        if ($request->hasFile('image')) {
            $name = $trip->id . '-' . time() . '-' . $request->image->getClientOriginalName();
            $name = str_replace(' ', '', $name);
            $request->image->storeAs('trip', $name, 'public');
            $tripData['image'] = $name;
        }

        $trip->update($tripData);

        return redirect()->route('trip.index')->with('success', 'Trip updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trip $trip)
    {
        try {
            $trip->delete();
            return redirect()->route('trip.index')->with('success', 'Trip deleted successfully');
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            return redirect()->route('trip.index')->with('error', 'Error deleting trip');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Trip;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTripRequest;
use App\Http\Requests\UpdateTripRequest;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trip_list = Trip::all();
        return view('trip', compact("trip_list"));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function trip()
     {
         $trip_list = Trip::all();
         return view('trip', compact("trip_list"));
     }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTripRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'price'  => 'required',
            'space'  => 'required',
            'image'  => 'required',
            'contact'  => 'required',
            'description'  => 'required'
        ]);

        Trip::create($request->post());

        return redirect()->route('/')->with('success', 'Trip has been created successfully.');
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
        return view('trip.edit',compact('trip'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTripRequest $request, Trip $trip)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'image' => '',
            'space' => 'required',
            'space_used' => '',
            'price' => 'required',
            'description' => 'required',
            'contact' => 'required',
            'start' => 'required',
            'end' => 'required',
        ]);
        
        $trip->update($request->all());
        
        return redirect()->route('trip')
                        ->with('success','Trip updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trip $trip)
    {
        if (User::find(Auth::user()->id)->cannot('delete', $trip)) {
            abort(403);
        }
        // dd($trip->delete());
        $trip->delete();
         
        return redirect()->route('trip')->with('success','Trip deleted successfully'); 
    }
}

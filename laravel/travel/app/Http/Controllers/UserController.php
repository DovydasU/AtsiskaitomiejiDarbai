<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_list = User::all();
        return view('user.index', compact("user_list"));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Check if the authenticated user has the "svetaines administratorius" role
        if (Gate::allows('delete-user', $user)) {
            try {
                $user->delete();
                return redirect()->route('user.index')->with('success', 'User deleted successfully');
            } catch (\Exception $e) {
                // Log the error or handle it as needed
                return redirect()->route('user.index')->with('error', 'Error deleting user');
            }
        } else {
            // Unauthorized user attempt
            abort(403, 'Unauthorized action.');
        }
    }
}

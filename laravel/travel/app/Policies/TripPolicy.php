<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Trip;
use App\Models\User;

class TripPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Trip $trip): bool
    {
        return $user->can('manage trips') && ($user->hasRole('Vartotojas Administratorius') || $user->id == $trip->user_id);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('manage trips');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Trip $trip): bool
    {
        return $user->can('manage trips') && ($user->hasRole('Vartotojas Administratorius') || $user->id == $trip->user_id);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Trip $trip): bool
    {
        return $user->can('manage trips') && ($user->hasRole('Vartotojas Administratorius') || $user->id == $trip->user_id);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Trip $trip): bool
    {
        return $this->delete($user, $trip);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Trip $trip): bool
    {
        return $this->delete($user, $trip);
    }
}

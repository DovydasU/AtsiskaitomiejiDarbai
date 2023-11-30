<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        \App\Models\Trip::class => \App\Policies\TripPolicy::class,
        Trip::class => TripPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
    
        Gate::define('create-category', function ($user) {
            return $user->hasRole('svetaines administratorius');
        });
        
        Gate::define('delete-category', function ($user, $category) {
            return $user->hasRole('svetaines administratorius');
        });        

        Gate::define('delete-user', function ($user, $targetUser) {
            // Check if the authenticated user has the "svetaines administratorius" role
            return $user->roles->pluck('name')->contains('svetaines administratorius');
        });
    }
}

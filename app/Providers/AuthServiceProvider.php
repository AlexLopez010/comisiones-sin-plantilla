<?php

namespace App\Providers;

use App\Models\User;
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
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        /*Gate::define(ability::'ver formulario', function(User $user){
         return $user->role = User::ROLE_ADMINISTRATOR;
        });

        Gate::define(ability::'ver peticiones', function(User $user){
            return $user->role = User::ROLE_ALUMN;
           })*/
    }
}

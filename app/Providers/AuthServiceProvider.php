<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];


    /**
     * Register any authentication / authorization services.
     * This will show&hide elements away from drivers and admins
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('driver-access', function ($user) {

            return $user->driver_id != null;
        });

        Gate::define('admin-access', function ($user) {

            return $user->driver_id == null;
        });


        //
    }
}

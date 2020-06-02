<?php

namespace App\Providers;

use App\Policies\PlayerPolicy;
use App\Player;
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
        Player::class => PlayerPolicy::class,
        // 'App\Player' => 'App\Policies\PlayerPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isadmin', function ($user) {
            return $user->role == 'Admin';
        });

        Gate::define('iscaptain', function ($user) {
            return $user->role == 'Captain';
        });
    }
}

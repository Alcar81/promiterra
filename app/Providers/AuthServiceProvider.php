<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\ { Image, User };
use App\Policies\ { ImagePolicy, UserPolicy };


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        Image::class => ImagePolicy::class,
        User::class => UserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {

        $this->registerPolicies();

        Gate::define('manage-users', function ($user) {
            return $user->hasAnyRole(['admin', 'master']);
        });

        Gate::define('edit-users', function ($user) {
            return $user->hasAnyRole(['admin', 'master', 'editor']);
        });

        Gate::define('delete-users', function ($user) {
            return $user->hasAnyRole(['admin', 'master']);
        });



       // Exemple pour une page.
       //Gate::define('delete-users', function ($user) {
       //     return $user->isAdmin();
       // });

    }
}

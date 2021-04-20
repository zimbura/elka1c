<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Permission;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;

class PermissionsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        try {
            Permission::get()->map(function ($permission) {
                Gate::define($permission->slug, function ($user) use ($permission) {
                    return $user->hasPermissionTo($permission);
                });
            });
        } catch (\Exception $e) {
            report($e);
            return false;
        }
        // Blade директивы для создания возможности ограничевать отображение данных с помощью блока
        // @role("director")
        //      Это видит только директор
        // @endrole
        Blade::if('role', function (...$roles) {
            foreach ($roles as $role) {
                if (auth()->check() && auth()->user()->hasRole($role)) {
                    return true;
                }
            }
        });
    }
}

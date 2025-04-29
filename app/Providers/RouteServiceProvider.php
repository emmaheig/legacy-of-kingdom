<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Ce namespace est appliqué à vos routes de contrôleur.
     *
     * De plus, il est défini comme le namespace racine pour l'URL generator.
     */
    protected $namespace = 'App\\Http\\Controllers';

    /**
     * Configurez vos liaisons de modèles, filtres, etc.
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configurez le "rate limiting" de l'API.
     */
    protected function configureRateLimiting()
    {
        // Tu peux ajouter ici ta configuration de limitation, par exemple :
        // RateLimiter::for('api', function (Request $request) {
        //     return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        // });
    }
}

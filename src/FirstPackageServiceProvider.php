<?php

namespace Nur13171\FirstPackage;


use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Nur13171\FirstPackage\Console\Commands\generateSalary;
use Nur13171\FirstPackage\Http\Middleware\AdminMiddleware;

class FirstPackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
        app('router')->aliasMiddleware('admin', AdminMiddleware::class);
    }

    protected function basePath($path = ''){
        return __DIR__.'/../'.$path;
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom($this->basePath('resources/views/'),'first-package');
        $this->publishes([
            $this->basePath('resources/views/') => resource_path('views/vendor/first-package')
        ],'first-package-views');
    


        $this->loadMigrationsFrom($this->basePath('database/migrations'));
        $this->publishes([
            $this->basePath('database/migrations') => database_path('migrations')
        ],'first-package-migrations');
        
        if ($this->app->runningInConsole()) {
            $this->commands([
                generateSalary::class,
            ]);
        }
        //$this->app->make(Router::class)->aliasMiddleware('admin', AdminMiddleware::class);
    }
}

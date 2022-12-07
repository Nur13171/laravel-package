<?php

namespace Nur13171\FirstPackage;

use Illuminate\Support\ServiceProvider;

class FirstPackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       
      
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
        
        
        $this->publishes([
            $this->basePath('config/first-package.php') => base_path('config/first-package.php')
        ],'first-package-config');

       
    }
}

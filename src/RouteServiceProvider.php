<?php

namespace Nur13171\FirstPackage;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider{
  protected $namespace= "Nur13171\FirstPackage\Facades\FirstPackage";

  public function map()
  {
    Route::namespace($this->namespace)->group(__DIR__.'/../routes/web.php');
  }
}
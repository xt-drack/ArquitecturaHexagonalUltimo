<?php 

namespace Src\Shared\Infrastructure\Services;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;


abstract class RouteServicesProvider extends ServiceProvider {

    private mixed $prefix;
    private mixed $namespaceName;
    private mixed $group;
    private ?bool $except;

    public function setDependency(
         mixed $prefix,
         mixed $namespace,
         mixed $group,
         ?bool $except = null
    ) {
        $this->prefix = $prefix;
        $this->namespaceName = $namespace;
        $this->group = $group;
        $this->$except = $except;
    }


    public function boot():void {

        parent::boot();
    }

    public function map():void {
        $this->mapRoutes();

    }
    
    public function mapRoutes():void {

        Route::prefix($this->prefix)
                ->namespace($this->namespaceName)
                ->group(basename($this->group));
    }
}

?>
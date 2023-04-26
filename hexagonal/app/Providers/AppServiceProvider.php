<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Builder;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Builder::macro('whereLike', function(array $array) {
            $this->where(function($query) use ($array) {
                foreach($array as $key => $value) {
                    $query->where($key,'LIKE','%'.$value.'%');
                }
            });
            return $this;
        });
    }
}

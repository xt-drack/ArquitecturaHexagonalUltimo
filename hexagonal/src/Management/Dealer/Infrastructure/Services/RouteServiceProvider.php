<?php

namespace Src\Management\Dealer\Infrastructure\Services;



use Src\Shared\Infrastructure\Services\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Config;
final class RouteServiceProvider extends ServiceProvider
{
    public function __construct($app) {

        $appVersion = Config::get('app.APP_VERSION');

        $this->setDependency("api/" . $appVersion . "/dealer",
            'Src\Management\Dealer\Infrastructure\Controllers',
            'Src/Management/Dealer/Infrastructure/Routes/Api.php',
            false
        );

        parent::__construct($app);

    }

}

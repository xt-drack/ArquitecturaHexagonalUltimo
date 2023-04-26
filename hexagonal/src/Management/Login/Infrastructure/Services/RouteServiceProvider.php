<?php

namespace Src\Management\Login\Infrastructure\Services;

use Src\Shared\Infrastructure\Services\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Config;


final class RouteServiceProvider extends ServiceProvider {

    public function __construct($app) {
        $appVersion = Config::get("app.APP_VERSION");

        $this->setDependency("api/" . $appVersion . "/login",
        'Src\Management\Login\Infrastructure\Controllers',
        'Src/Management/Login/Infrastructure/Routes/Api.php',
        true
        );

        parent::__construct($app);

    }





}

?>

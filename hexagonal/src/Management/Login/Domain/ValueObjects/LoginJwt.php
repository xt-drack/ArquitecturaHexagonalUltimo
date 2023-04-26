<?php

namespace Src\Management\Login\Domain\ValueObjects;


use Src\Shared\Domain\ValueObjects\StringvalueObject;
use Illuminate\Support\Facades\Config;
final class LoginJwt extends StringvalueObject {

    public function jwtKey(): string {
        return Config::get('app.JWT_KEY');
    }

    public function jwtEncrypt():string {
        return Config::get("app.JWT_ENCRYPT");
    }
}

?>

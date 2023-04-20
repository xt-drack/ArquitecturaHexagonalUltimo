<?php 

namespace Src\Management\Login\Domain\ValueObjects;


use Src\Shared\Domain\ValueObjects\StringvalueObject;

final class LoginJwt extends StringvalueObject {
 
    public function jwtKey(): string {
        return env('JWT_KEY');
    }

    public function jwtEncrypt():string {
        return env("JWT_ENCRYPT");
    }
}

?>
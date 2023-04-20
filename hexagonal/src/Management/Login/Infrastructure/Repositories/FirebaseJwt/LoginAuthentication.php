<?php 

namespace Src\Management\Login\Infrastructure\Repositories\FirebaseJwt;

use Src\Management\Login\Domain\Contracts\LoginAuthenticationContract;
use Src\Management\Login\Domain\ValueObjects\LoginAuthenticationParameters;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Src\Management\Login\Domain\ValueObjects\LoginJwt;

final class LoginAuthentication implements LoginAuthenticationContract {

    private JWT $jwt;

    public function __construct()
    {
        $this->jwt = new JWT();
    }

    public function auth(LoginAuthenticationParameters $loginAuthentication): string {

        return $this->jwt::encode([
            $loginAuthentication->handler(),
        ],
        $loginAuthentication->jwtKey(),
        $loginAuthentication->jwtEncrypt()
    );
        
    }

    public function check(LoginJwt $loginJwt): bool {
        //dd($loginJwt);
        try {
            $decode = $this->jwt::decode(
                $loginJwt->value(),
                new Key($loginJwt->jwtKey(), $loginJwt->jwtEncrypt())
            );
            $decodeArray = get_object_vars($decode);
            //dd($decodeArray[0]->nbf);
            if(time() > $decodeArray[0]->nbf) {
                return false;
            }
        } catch (\Exception $e) {
            dd($e);
            return false;
        }

        return true;
    }

}

?>
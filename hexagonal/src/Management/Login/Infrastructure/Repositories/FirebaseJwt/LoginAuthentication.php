<?php 

namespace Src\Management\Login\Infrastructure\Repositories\FirebaseJwt;

use Src\Management\Login\Domain\Contracts\LoginAuthenticationContract;
use Src\Management\Login\Domain\ValueObjects\LoginAuthenticationParameters;
use Firebase\JWT\JWT;

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


}

?>
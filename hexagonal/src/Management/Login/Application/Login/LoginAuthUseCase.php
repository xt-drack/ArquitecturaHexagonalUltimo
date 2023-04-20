<?php 

namespace Src\Management\Login\Application\Login;

use Src\Management\Login\Application\Auth\LoginAuthenticationUseCase;
use Src\Management\Login\Domain\Contracts\LoginRepositoryContract;
use Src\Management\Login\Domain\ValueObjects\LoginAuthentication;
use Src\Management\Login\Domain\Login;

final class LoginAuthUseCase {

    public function __construct(
        private LoginRepositoryContract $loginRepositoryContract,
        private LoginAuthenticationUseCase $loginAuthenticationUseCase
    )
    {

    }
    public function __invoke(array $request): Login
    {
        $login = $this->loginRepositoryContract->login(new LoginAuthentication($request));
        $jwt = $this->loginAuthenticationUseCase->__invoke($login->handler());
        //dd($asd);
        return new Login(
            array_merge($login->handler(), [
                "jwt" => $jwt
            ])
        );
        //return "hola mundo desde caso de uso";
    }
}

?>
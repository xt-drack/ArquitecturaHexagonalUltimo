<?php 

namespace Src\Management\Login\Application\Login;

use Src\Management\Login\Domain\Contracts\LoginRepositoryContract;
use Src\Management\Login\Domain\ValueObjects\LoginAuthentication;
use Src\Management\Login\Domain\Login;

final class LoginAuthUseCase {

    public function __construct(
        private LoginRepositoryContract $loginRepositoryContract
    )
    {
        
    }
    public function __invoke(array $request): Login
    {
        $login = $this->loginRepositoryContract->login(new LoginAuthentication($request));
        return $login;
        //return "hola mundo desde caso de uso";
    }
}

?>
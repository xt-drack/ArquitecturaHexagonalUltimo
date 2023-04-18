<?php 

namespace Src\Management\Login\Infrastructure\Repositories\Eloquent;

use Src\Management\Login\Domain\Contracts\LoginRepositoryContract;
use Src\Management\Login\Domain\Login;
use Src\Management\Login\Domain\ValueObjects\LoginAuthentication;

final class LoginRepository implements LoginRepositoryContract {


    public function login(LoginAuthentication $loginAuthentication): Login {
        return new Login($loginAuthentication->value(),null);
    }
}


?>
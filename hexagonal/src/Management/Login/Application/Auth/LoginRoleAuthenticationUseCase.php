<?php

namespace Src\Management\Login\Application\Auth;

use Src\Management\Login\Domain\Contracts\LoginAuthenticationContract;
use Src\Management\Login\Domain\Login;
use Src\Management\Login\Domain\ValueObjects\LoginJwt;

final class LoginRoleAuthenticationUseCase
{

public function __construct(
    private readonly LoginAuthenticationContract $loginAuthenticationContract
)
{
}


public function __invoke(
    string $jwt,
    string | array $typeRole
):bool
{
    // TODO: Implement __invoke() method.
    //dd($jwt,$typeRole,"CASO DE USO");
    $login = new Login([
        "user" => $this->loginAuthenticationContract->get(new LoginJwt($jwt)),
        "typeRoles"=> $typeRole
    ]);

    return ($login->getCheckRole());
}
}

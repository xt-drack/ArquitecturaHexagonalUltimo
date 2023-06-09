<?php

namespace Src\Shared\Infrastructure\Middleware;

use Closure;
use Illuminate\Http\Request;
use Src\Management\Login\Application\Auth\LoginRoleAuthenticationUseCase;
use Src\Shared\Infrastructure\Exceptions\AuthException;
use Src\Shared\Infrastructure\Helper\HttpCodesHelper;

final class RoleMiddleware
{
    use HttpCodesHelper;

    public function __construct(
        private readonly LoginRoleAuthenticationUseCase $loginRoleAuthenticationUseCase
    ) {

    }

    /**
     * @throws AuthException
     */
    public function handle(
        Request $request,
        Closure $next
    ):mixed {

        if(empty($request->header("authentication"))) {
            throw new AuthException("Not jwt auth", $this->badRequest());
        }

        $check = $this->loginRoleAuthenticationUseCase->__invoke(
            $request->header("authentication"),
            $request->route()->controller->getMiddleware()[0]["options"]["role"] ?? "*"
        );

        if(!$check) {
            throw new AuthException("You role is not valid", $this->unAuthorized());
        }
        return $next($request);

    }
}

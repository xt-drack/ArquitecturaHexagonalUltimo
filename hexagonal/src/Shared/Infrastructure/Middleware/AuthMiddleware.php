<?php 

namespace Src\Shared\Infrastructure\Middleware;

use Src\Shared\Infrastructure\Helper\HttpCodesHelper;
use Closure;
use Illuminate\Http\Request;
use Src\Management\Login\Application\Auth\LoginCheckAutheticationUseCase;
use Src\Shared\Infrastructure\Exceptions\AuthException;

final class AuthMiddleware {

    use HttpCodesHelper;

    public function __construct(
        private readonly LoginCheckAutheticationUseCase $loginCheckAutheticationUseCase
        )
    {
        
    }

    public function handle(
        Request $request,
        Closure $next
    ):mixed {
        //dd($request);
        if(empty($request->header('authentication'))) {
            throw new AuthException("Not jwt auth,", $this->badRequest());
        }

        $check = $this->loginCheckAutheticationUseCase->__invoke($request->header('authentication'));
        //dd($check);
        if (!$check) {
            throw new AuthException("Invalid token or invalid user or expired token", $this->unAuthorized());
        }
        return $next($request);
        
    }

}

?>
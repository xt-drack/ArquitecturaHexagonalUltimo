<?php 

namespace Src\Management\Login\Infrastructure\Controllers;

use Illuminate\Http\JsonResponse;
use Src\Management\Login\Application\Login\LoginAuthUseCase;
use Src\Shared\Infrastructure\Controllers\CustomController;
use Src\Shared\Infrastructure\Helper\HttpCodesHelper;

final class LoginAuthController extends CustomController
{
    use HttpCodesHelper;

    public function __construct(private LoginAuthUseCase $loginAuthUseCase)
    {
        
    }

    public function __invoke(): JsonResponse
    {
        return $this->jsonResponse(
            $this->ok(),
            false,
            $this->loginAuthUseCase->__invoke()
        );
        
    }
}

?>
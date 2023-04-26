<?php

namespace Src\Management\Dealer\Infrastructure\Controllers;

use Illuminate\Http\JsonResponse;
use Src\Management\Dealer\Application\Dealers\DealersUseCase;
use Src\Shared\Infrastructure\Controllers\CustomController;
use Src\Shared\Infrastructure\Helper\HttpCodesHelper;
use Src\Shared\Infrastructure\Middleware\RoleMiddleware;

final class DealerController extends CustomController
{

    use HttpCodesHelper;

    public function __construct(private readonly DealersUseCase $dealersUseCase)
    {
       $this->middleware(RoleMiddleware::class, [
            'role' => 'super_admin'
        ]);
    }

    

    
    public function __invoke():JsonResponse
    {

    
        // TODO: Implement __invoke() method.
        return $this->jsonResponse(
            $this->ok(),
            false,
            $this->dealersUseCase->__invoke()->entity());
    }

}

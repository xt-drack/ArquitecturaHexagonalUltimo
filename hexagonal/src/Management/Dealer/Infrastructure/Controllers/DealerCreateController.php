<?php

namespace Src\Management\Dealer\Infrastructure\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Src\Management\Dealer\Application\Dealers\DealerCreateUseCase;
use Src\Shared\Infrastructure\Controllers\CustomController;
use Src\Shared\Infrastructure\Helper\HttpCodesHelper;
use Src\Shared\Infrastructure\Middleware\RoleMiddleware;

class DealerCreateController extends CustomController

{

    use HttpCodesHelper;

    public function __construct(private readonly DealerCreateUseCase $dealerCreateUseCase)
    {
        $this->middleware(RoleMiddleware::class, [
            'role' => 'super_admin'
        ]);
    }

    public function __invoke(Request $request):JsonResponse
    {

        // TODO: Implement __invoke() method.
        return $this->jsonResponse(
            $this->ok(),
            false,
            $this->dealerCreateUseCase->__invoke($request)->entity());
    }
}

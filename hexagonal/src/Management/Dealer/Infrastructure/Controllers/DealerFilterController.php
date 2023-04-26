<?php

namespace Src\Management\Dealer\Infrastructure\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Src\Management\Dealer\Application\Dealers\DealersFilterUseCase;
use Src\Shared\Infrastructure\Controllers\CustomController;
use Src\Shared\Infrastructure\Helper\HttpCodesHelper;

final class DealerFilterController extends CustomController
{

    use HttpCodesHelper;
    public function __construct(
        private readonly DealersFilterUseCase $dealersFilterUseCase)
    {
    }

    public function __invoke(Request $request): JsonResponse
    {
        // TODO: Implement __invoke() method.
        return $this->jsonResponse(
            $this->ok(),
            false,
            $this->dealersFilterUseCase->__invoke($request)->entity());
    }

}

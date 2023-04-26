<?php

namespace Src\Management\Dealer\Application\Dealers;


use Illuminate\Http\Request;
use Src\Management\Dealer\Domain\Contracts\DealerFilterRepositoryContract;

use Src\Management\Dealer\Domain\Dealer;
use Src\Management\Dealer\Domain\ValueObjects\DealerParameters;

final class DealersFilterUseCase
{
    public function __construct(
        private readonly DealerFilterRepositoryContract $dealerFilterRepositoryContract
    )
    {
    }

    public function __invoke(Request $request): Dealer
    {
        $dealers = $this->dealerFilterRepositoryContract->filterDealer(new DealerParameters($request))->entity();
        // TODO: Implement __invoke() method.
        return new Dealer($dealers,null);
    }
}


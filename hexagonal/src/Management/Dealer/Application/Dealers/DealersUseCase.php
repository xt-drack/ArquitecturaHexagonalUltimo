<?php

namespace Src\Management\Dealer\Application\Dealers;

use Src\Management\Dealer\Domain\Contracts\DealerRepositoryContract;
use Src\Management\Dealer\Domain\Dealer;

final class DealersUseCase
{
    public function __construct(
        private readonly DealerRepositoryContract $dealerRepositoryContract
    )
    {
    }

    public function __invoke(): Dealer
    {
        $dealers = $this->dealerRepositoryContract->getDealers()->entity();
        // TODO: Implement __invoke() method.
        return new Dealer($dealers,null);
    }
}

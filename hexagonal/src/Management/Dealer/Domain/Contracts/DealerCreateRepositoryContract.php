<?php

namespace Src\Management\Dealer\Domain\Contracts;

use Src\Management\Dealer\Domain\Dealer;
use Src\Management\Dealer\Domain\ValueObjects\DealerCreateParameters;
use Src\Management\Dealer\Domain\ValueObjects\DealerParameters;

interface DealerCreateRepositoryContract
{

    public function createDealer($dealerCreateParameters):Dealer;
}

<?php

namespace Src\Management\Dealer\Domain\Contracts;

use Illuminate\Http\Request;
use Src\Management\Dealer\Domain\Dealer;
use Src\Management\Dealer\Domain\ValueObjects\DealerParameters;

interface DealerFilterRepositoryContract
{
    public function filterDealer(DealerParameters $dealerParameters):Dealer;
}

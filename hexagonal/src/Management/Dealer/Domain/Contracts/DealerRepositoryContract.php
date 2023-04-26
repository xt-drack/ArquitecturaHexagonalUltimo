<?php

namespace Src\Management\Dealer\Domain\Contracts;

use Src\Management\Dealer\Domain\Dealer;

interface DealerRepositoryContract
{

    public function getDealers():Dealer;
}

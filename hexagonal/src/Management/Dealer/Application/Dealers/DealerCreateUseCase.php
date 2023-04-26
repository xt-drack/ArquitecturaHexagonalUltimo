<?php

namespace Src\Management\Dealer\Application\Dealers;

use Illuminate\Http\Request;
use Src\Management\Dealer\Domain\Contracts\DealerCreateRepositoryContract;
use Src\Management\Dealer\Domain\Dealer;
use Src\Management\Dealer\Domain\ValueObjects\DealerCreateParameters;

final class DealerCreateUseCase
{
public function __construct(private readonly DealerCreateRepositoryContract $dealerCreateRepositoryContract)
{
}

public function __invoke(Request $request): Dealer
{
    $dealer = $this->dealerCreateRepositoryContract->createDealer(($request));
    //dd($dealer->entity());
    // TODO: Implement __invoke() method.
    return new Dealer($dealer->entity(),null);
}
}

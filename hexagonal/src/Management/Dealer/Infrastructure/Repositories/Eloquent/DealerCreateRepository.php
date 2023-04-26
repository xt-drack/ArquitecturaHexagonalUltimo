<?php

namespace Src\Management\Dealer\Infrastructure\Repositories\Eloquent;

use Src\Management\Dealer\Domain\Contracts\DealerCreateRepositoryContract;
use Src\Management\Dealer\Domain\Dealer;
use Src\Management\Dealer\Domain\ValueObjects\DealerCreateParameters;
use Src\Management\Dealer\Infrastructure\Repositories\Eloquent\Dealer as Model;


final class DealerCreateRepository implements DealerCreateRepositoryContract
{
    private Model $model;
    public function __construct(Model $model)
    {
        $this->model=$model;
    }
    public function createDealer( $dealerCreateParameters): Dealer
    {
        // TODO: Implement createDealer() method.
        //dd($dealerCreateParameters->all());
        //dd($this->model->create($dealerCreateParameters->value()));
        return new Dealer($this->model->create($dealerCreateParameters->all()),null);

    }
}

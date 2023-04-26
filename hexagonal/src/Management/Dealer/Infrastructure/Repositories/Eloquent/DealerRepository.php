<?php

namespace Src\Management\Dealer\Infrastructure\Repositories\Eloquent;

use Illuminate\Support\Collection;
use Src\Management\Dealer\Domain\Contracts\DealerRepositoryContract;
use Src\Management\Dealer\Domain\Dealer;
use Src\Management\Dealer\Infrastructure\Repositories\Eloquent\Dealer as Model;

final class DealerRepository implements DealerRepositoryContract
{

    private Model $model;
    public function __construct(Model $model)
    {
        $this->model=$model;
    }

    public function getDealers(): Dealer
    {
        // TODO: Implement getDealers() method.
        //dd( new Dealer($this->getDealersDB(),null));
        return new Dealer($this->getDealersDB(),null);
    }

    private function updateDealerDB() {
        return json_decode($this->model->with(["provinces"])->get());
    }
    private function getDealersDB () {
        //dd($this->model->all());
        return json_decode($this->model->with(["provinces",'cities','plans','groups'])->get());
    }
}

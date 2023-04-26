<?php

namespace Src\Management\Dealer\Infrastructure\Repositories\Eloquent;

use Illuminate\Http\Request;
use Src\Management\Dealer\Domain\Contracts\DealerFilterRepositoryContract;
use Src\Management\Dealer\Domain\Dealer;
use Src\Management\Dealer\Domain\ValueObjects\DealerParameters;
use Src\Management\Dealer\Infrastructure\Repositories\Eloquent\Dealer as Model;


final class DealerFilterRepository implements DealerFilterRepositoryContract
{
    private Model $model;
    protected array $relations = [
    'provinces',
    'cities',
    'plans',
    'groups'
    ];


    public function __construct(Model $model)
    {
        $this->model=$model;
    }
    public function filterDealer(DealerParameters $dealerParameters): Dealer
    {

        // TODO: Implement filterDealer() method.
        return new Dealer($this->getDealersFilterDB($dealerParameters),null);
    }

    private function getDealersFilterDB (DealerParameters $dealerParameters) {
        //dd($this->model->all());
        //return json_decode($this->model->with(["provinces",'cities','plans','groups'])->get());
        $fields = $dealerParameters->deleteNulls($dealerParameters->value());
        $fieldsLike = $dealerParameters->addLikes($fields);
        $fields = $dealerParameters->deleteDuplicates($fields,$fieldsLike);
        return json_decode($this->model->with($this->relations)->where($fields)->whereLike($fieldsLike)->get());
    }


}

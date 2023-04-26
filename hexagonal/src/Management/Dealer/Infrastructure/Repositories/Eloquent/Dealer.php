<?php

namespace Src\Management\Dealer\Infrastructure\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Src\Application\City\Infrastructure\Repositories\Eloquent\City;
use Src\Application\Group\Infrastructure\Repositories\Eloquent\Group;
use Src\Application\Plan\Infrastructure\Repositories\Eloquent\Plan;
use Src\Application\Province\Infrastructure\Repositories\Eloquent\Province;

class Dealer extends Model
{
    protected $table = "dealers";

    protected $fillable=[
        "name",
        "status",
        "delete",
        "due_date",
        "frequency",
    ];

    public function provinces() : HasOne {
        return $this->hasOne(Province::class,"id","province_id");
    }

    public function cities():HasOne {
        return $this->hasOne(City::class,"id","city_id");
    }

    public function plans():HasOne {
        return $this->hasOne(Plan::class,"id","plan_id");
    }

    public function groups():HasOne {
        return $this->hasOne(Group::class,"id","group_id");
    }
}

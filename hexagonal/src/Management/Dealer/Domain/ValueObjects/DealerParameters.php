<?php

namespace Src\Management\Dealer\Domain\ValueObjects;

use Illuminate\Http\Request;
use Src\Shared\Domain\ValueObjects\MixedValueObject;

class DealerParameters extends MixedValueObject
{

    protected array $likes = [
        'name'
    ];
    public function deleteNulls(Request $request): array
    {
        $array = $request->all();
        foreach ($array as $key => $value){
            if ($value == null && empty($value)) {
                unset($array[$key]);
            }
        }
        return $array;
    }

    public function addLikes(array $array): array
    {
        $likes = $this->likes;
        $fieldsLike = array();
        foreach($array as $key => $value) {
            if (in_array($key, $likes)) {
                $fieldsLike[$key] = $value;
            }
        }
        return $fieldsLike;
    }

    public function deleteDuplicates($fields, $fieldsLike) {
        foreach($fieldsLike as $key => $value) {
            if (array_key_exists($key, $fields)) {
                unset($fields[$key]);
            }
        }
        return $fields;
    }

}

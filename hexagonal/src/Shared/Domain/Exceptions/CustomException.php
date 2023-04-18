<?php 

namespace Src\Shared\Domain\Exceptions;

use Exception;

abstract class CustomException extends Exception {


    public function toException():array {

        $classTemporal = new \ReflectionClass(get_class($this));
        $class = explode("\\", $classTemporal->getName());
        return [
            "status" => $this->getCode(),
            "error" => true,
            "class" => end($class),
            "message" => $this->getMessage()

        ];

    }

}

?>
<?php 

namespace Src\Shared\Domain\Helper;

trait HttpCodesDomainHelper {

public function ok():int {
    return 200;
}

public function badRequest():int {
    return 400;
}

public function unAuthorized():int {
    return 401;
}


}

?>
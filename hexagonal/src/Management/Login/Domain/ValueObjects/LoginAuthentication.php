<?php 

namespace Src\Management\Login\Domain\ValueObjects;

use Src\Shared\Domain\ValueObjects\MixedValueObject;

final class LoginAuthentication extends MixedValueObject {

    public  function checkPassword(string $passwordRequest, string $passwordUsuario):bool {        
        return password_verify($passwordRequest, $passwordUsuario);
    }
    
}

?>
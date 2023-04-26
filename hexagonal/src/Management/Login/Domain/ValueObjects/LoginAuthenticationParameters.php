<?php

namespace Src\Management\Login\Domain\ValueObjects;

use Src\Shared\Domain\ValueObjects\MixedValueObject;
use Illuminate\Support\Facades\Config;
final class LoginAuthenticationParameters extends MixedValueObject {


    public function handler(): array {
        return [
            'iat' => time(),
            'nbf' => $this->getTime(),
            'aud' => $this->aud(),
            'data' => $this->value()


        ];
    }

    private function getTime(): float|int {
          $time = time();
          return $time + (60*60);
    }

    private function aud (): null | string {
        $aud = "";
        if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
            $aud = $_SERVER["HTTP_CLIENT_IP"];
        }

        if (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
            $aud = $_SERVER["HTTP_X_FORWARDED_FOR"];
        }

        if (!empty($_SERVER["REMOTE_ADDR"])) {
            $aud = $_SERVER["REMOTE_ADDR"];
        }

        $aud.= @$_SERVER["HTTP_USER_AGENT"];
        $aud.= gethostname();

        return sha1($aud ?? null);
    }

    public function jwtKey(): string {
        return Config::get('app.JWT_KEY');
    }

    public function jwtEncrypt():string {
        return Config::get("app.JWT_ENCRYPT");
    }

}

?>

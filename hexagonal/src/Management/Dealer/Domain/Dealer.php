<?php

namespace Src\Management\Dealer\Domain;

use Src\Shared\Domain\Domain;
use Src\Shared\Infrastructure\Helper\HttpCodesHelper;

class Dealer extends Domain
{
    use HttpCodesHelper;
    protected function isException(?string $exception): void
    {
        // TODO: Implement isException() method.
    }
}

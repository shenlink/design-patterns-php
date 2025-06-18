<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Facade\Basic;

class SubSystemA
{
    public function operationA(): void
    {
        echo 'SubSystemA operation' . PHP_EOL;
    }
}

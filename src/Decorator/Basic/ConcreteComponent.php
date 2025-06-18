<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Decorator\Basic;

class ConcreteComponent implements Component
{
    public function operation(): void
    {
        echo 'ConcreteComponent operation' . PHP_EOL;
    }
}
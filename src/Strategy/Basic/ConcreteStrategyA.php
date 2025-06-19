<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Strategy\Basic;

class ConcreteStrategyA implements Strategy
{
    public function algorithm(): void
    {
        echo 'ConcreteStrategyA' . PHP_EOL;
    }
}
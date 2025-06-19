<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Strategy\Extend;

class ConcreteStrategyB implements Strategy
{
    public function algorithm(): void
    {
        echo 'ConcreteStrategyB' . PHP_EOL;
    }
}
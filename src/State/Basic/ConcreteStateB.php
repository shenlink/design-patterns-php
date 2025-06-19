<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\State\Basic;

class ConcreteStateB implements State
{
    public function handle(Context $context): void
    {
        echo 'ConcreteStateB' . PHP_EOL;
        $context->setState(new ConcreteStateA());
    }
}
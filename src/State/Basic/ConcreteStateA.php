<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\State\Basic;

class ConcreteStateA implements State
{
    public function handle(Context $context): void
    {
        echo 'ConcreteStateA' . PHP_EOL;
        $context->setState(new ConcreteStateB());
    }
}
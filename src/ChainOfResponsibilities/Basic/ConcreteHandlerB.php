<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\ChainOfResponsibilities\Basic;

class ConcreteHandlerB extends Handler
{
    public function handle(string $request): string
    {
        return 'ConcreteHandlerB handled request2';
    }
}

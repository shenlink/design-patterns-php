<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\ChainOfResponsibilities\Basic;

class ConcreteHandlerA extends Handler
{
    public function handle(string $request): string
    {
        if ($request === 'request1') {
            return 'ConcreteHandler handled request1';
        }
        return $this->successor->handle($request);
    }
}
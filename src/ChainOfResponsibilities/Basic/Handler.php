<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\ChainOfResponsibilities\Basic;

abstract class Handler
{
    protected Handler $successor;

    public function setSuccessor(Handler $successor): void
    {
        $this->successor = $successor;
    }

    public abstract function handle(string $request): string;
}

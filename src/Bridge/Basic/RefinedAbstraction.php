<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Bridge\Basic;

class RefinedAbstraction extends Abstraction
{
    protected Implementor $implementor;

    public function __construct(Implementor $implementor)
    {
        $this->implementor = $implementor;
    }

    public function operation(): void
    {
        $this->implementor->operationImpl();
    }
}
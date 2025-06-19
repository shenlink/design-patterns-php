<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Mediator\Solution;

abstract class Component
{
    protected Mediator $mediator;

    public function __construct(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }

    public function changed(): void
    {
        $this->mediator->componentChanged($this);
    }

    public abstract function update(): void;
}

<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Mediator\Basic;

abstract class Colleague
{
    protected Mediator $mediator;

    public function __construct(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }

    public abstract function receive(string $message): void;

    public abstract function send(string $message): void;
}
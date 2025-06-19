<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Mediator\Basic;

interface Mediator
{
    public function register(Colleague $colleague): void;

    public function send(string $message, Colleague $colleague): void;
}

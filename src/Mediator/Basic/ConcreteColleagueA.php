<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Mediator\Basic;

class ConcreteColleagueA extends Colleague
{
    public function __construct(Mediator $mediator)
    {
        parent::__construct($mediator);
    }

    public function send(string $message): void
    {
        echo 'Colleague A sending: ' . $message . PHP_EOL;
        $this->mediator->send($message, $this);
    }

    public function receive(string $message): void
    {
        echo 'Colleague A received: ' . $message . PHP_EOL;
    }
}

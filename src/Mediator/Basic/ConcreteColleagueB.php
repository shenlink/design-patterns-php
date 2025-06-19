<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Mediator\Basic;

class ConcreteColleagueB extends Colleague
{
    public function __construct(Mediator $mediator)
    {
        parent::__construct($mediator);
    }

    public function send(string $message): void
    {
        echo 'Colleague B sending: ' . $message . PHP_EOL;
        $this->mediator->send($message, $this);
    }

    public function receive(string $message): void
    {
        echo 'Colleague B received: ' . $message . PHP_EOL;
    }
}

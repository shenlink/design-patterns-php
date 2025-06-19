<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Mediator\Basic;

class ConcreteMediator implements Mediator
{
    private array $colleagues = [];

    public function register(Colleague $colleague): void
    {
        $this->colleagues[] = $colleague;
    }

    public function send(string $message, Colleague $colleague): void
    {
        foreach ($this->colleagues as $colleagueItem) {
            if ($colleagueItem !== $colleague) {
                $colleagueItem->receive($message);
            }
        }
    }
}
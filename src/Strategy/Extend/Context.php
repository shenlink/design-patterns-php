<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Strategy\Extend;

class Context
{
    private Strategy $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(Strategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function algorithm(): void
    {
        $this->strategy->algorithm();
    }
}
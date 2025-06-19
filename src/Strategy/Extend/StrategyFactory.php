<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Strategy\Extend;


class StrategyFactory
{
    /**
     * @var Strategy[]
     */
    private array $strategies = [];

    public function __construct()
    {
        $this->strategies[ConcreteStrategyA::class] = new ConcreteStrategyA();
        $this->strategies[ConcreteStrategyB::class] = new ConcreteStrategyB();
    }

    public function getStrategy(string $strategyClass): Strategy
    {
        if (!isset($this->strategies[$strategyClass])) {
            throw new \InvalidArgumentException('Strategy not found');
        }

        return $this->strategies[$strategyClass];
    }
}
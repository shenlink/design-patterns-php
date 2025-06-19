<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\TemplateMethod\Extend;

class ConcreteClassB extends AbstractClass
{
    public function __construct(bool $isStep1Executed)
    {
        $this->isStep1Executed = $isStep1Executed;
    }

    public function step1(): void
    {
        echo 'ConcreteClassB step1' . PHP_EOL;
    }

    public function step2(): void
    {
        echo 'ConcreteClassB step2' . PHP_EOL;
    }

    public function step3(): void
    {
        echo 'ConcreteClassB step3' . PHP_EOL;
    }
}

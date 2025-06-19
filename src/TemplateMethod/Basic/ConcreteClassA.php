<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\TemplateMethod\Basic;

class ConcreteClassA extends AbstractClass
{
    public function step1(): void
    {
        echo 'ConcreteClassA step1' . PHP_EOL;
    }

    public function step2(): void
    {
        echo 'ConcreteClassA step2' . PHP_EOL;
    }

    public function step3(): void
    {
        echo 'ConcreteClassA step3' . PHP_EOL;
    }
}
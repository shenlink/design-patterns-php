<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Decorator\Basic;

class ConcreteDecorator extends Decorator
{
    public function __construct(Component $component)
    {
        parent::__construct($component);
    }

    public function operation(): void
    {
        parent::operation();
        $this->addBehavior();
    }

    public function addBehavior(): void
    {
        echo 'add behavior' . PHP_EOL;
    }
}

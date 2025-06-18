<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Decorator\Solution;

class Decorator implements Component
{
    protected Component $component;

    public function __construct(Component $component)
    {
        $this->component = $component;
    }

    public function display(): void
    {
        $this->component->display();
    }
}
<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Decorator\Basic;

class Decorator implements Component
{
    protected Component $component;

    public function __construct(Component $component)
    {
        $this->component = $component;
    }

    public function operation(): void
    {
        $this->component->operation();
    }
}
<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Composite\Basic;

interface Component
{
    public function add(Component $component): void;

    public function remove(Component $component): void;

    public function getChild(int $index): Component;

    public function operation(): void;
} 
<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Composite\Extend;

abstract class Component
{
    public function add(Component $component): void
    {
        echo '不支持该方法';
    }

    public function remove(Component $component): void
    {
        echo '不支持该方法';
    }

    public function getChild(int $index): ?Component
    {
        echo '不支持该方法';
        return null;
    }

    public abstract function operation(): void;
}

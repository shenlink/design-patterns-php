<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Composite\Basic;

use Exception;

class Leaf implements Component
{
    public function add(Component $component): void
    {
        throw new Exception('不支持该方法');
    }

    public function remove(Component $component): void
    {
        throw new Exception('不支持该方法');
    }

    public function getChild(int $index): Component
    {
        throw new Exception('不支持该方法');
    }

    public function operation(): void
    {
        echo 'Leaf operation' . PHP_EOL;
    }
}
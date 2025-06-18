<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Decorator\Solution;

class ListBox implements Component
{
    public function display(): void
    {
        echo '显示列表框' . PHP_EOL;
    }
}
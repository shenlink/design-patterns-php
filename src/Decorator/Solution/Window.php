<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Decorator\Solution;

class Window implements Component
{
    public function display(): void
    {
        echo '显示窗体' . PHP_EOL;
    }
}

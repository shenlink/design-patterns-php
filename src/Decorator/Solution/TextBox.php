<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Decorator\Solution;

class TextBox implements Component
{
    public function display(): void
    {
        echo '显示文本框' . PHP_EOL;
    }
}
<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Flyweight\Extend;

// 享元类
class Flyweight
{
    // 内部状态
    private string $intrinsicState;

    public function __construct(string $intrinsicState)
    {
        $this->intrinsicState = $intrinsicState;
    }

    public function operation(): void
    {
        echo '内部状态：' . $this->intrinsicState . PHP_EOL;
    }
}
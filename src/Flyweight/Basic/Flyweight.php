<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Flyweight\Basic;

// 享元类
class Flyweight
{
    // 内部状态
    private string $intrinsicState;

    public function __construct(string $intrinsicState)
    {
        $this->intrinsicState = $intrinsicState;
    }

    // extrinsicState 外部状态
    // 外部状态不是必须的
    public function operation(string $extrinsicState): void
    {
        echo '内部状态：' . $this->intrinsicState . ' 外部状态：' . $extrinsicState . PHP_EOL;
    }
}
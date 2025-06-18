<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\AbstractFactory\Solution;

// 浅蓝色按钮
class SummerButton implements IButton
{
    // 显示按钮
    public function display(): void
    {
        echo 'Summer Button';
    }
}
<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\AbstractFactory\Solution;

// 浅绿色按钮
class SpringButton implements IButton
{
    // 显示按钮
    public function display(): void
    {
        echo 'Spring Button';
    }
}
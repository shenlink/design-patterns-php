<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\AbstractFactory\Solution;

// 按钮接口
interface IButton
{
    // 显示按钮
    public function display(): void;
}
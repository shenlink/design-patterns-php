<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\AbstractFactory\Solution;

// 组合框接口
interface IComboBox
{
    // 显示组合框
    public function display(): void;
}
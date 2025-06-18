<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\AbstractFactory\Solution;

// 浅蓝色边框的组合框
class SummerComboBox implements IComboBox
{
    // 显示组合框
    public function display(): void
    {
        echo 'Summer ComboBox';
    }
}
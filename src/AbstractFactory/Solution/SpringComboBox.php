<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\AbstractFactory\Solution;

// 浅绿色边框的组合框
class SpringComboBox implements IComboBox
{
    // 显示组合框
    public function display(): void
    {
        echo 'Spring ComboBox';
    }
}
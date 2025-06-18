<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\AbstractFactory\Solution;

// 浅蓝色边框的文本框
class SummerTextField implements ITextField
{
    // 显示文本框
    public function display(): void
    {
        echo 'Summer TextField';
    }
}
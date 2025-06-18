<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\AbstractFactory\Solution;

// 文本框接口
interface ITextField
{
    // 显示文本框
    public function display(): void;
}
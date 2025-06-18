<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\SimpleFactory\Solution;

// 图表接口
interface IChart
{
    // 显示图表
    public function display(): void;
}


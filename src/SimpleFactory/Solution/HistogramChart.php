<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\SimpleFactory\Solution;

// 柱状图类
class HistogramChart implements IChart
{
    // 显示柱状图
    public function display(): void
    {
        echo '显示柱状图';
    }
}

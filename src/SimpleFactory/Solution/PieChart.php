<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\SimpleFactory\Solution;

// 饼状图类
class PieChart implements IChart
{
    // 显示饼状图
    public function display(): void
    {
        echo '显示饼状图';
    }
}

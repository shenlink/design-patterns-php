<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\SimpleFactory\Solution;

// 折线图类
class LineChart implements IChart
{
    public function display(): void
    {
        echo '显示折线图';
    }
}

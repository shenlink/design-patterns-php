<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\SimpleFactory\Solution;

use Exception;

// 图表工厂类
class ChartFactory
{
    /**
     * 创建图表，根据传入的type返回对应的图表对象，如果type错误，则抛出异常
     * @param string $type 图表类型
     * @return IChart 图表对象
     * @throws Exception
     */
    public function createChart(string $type): IChart
    {
        switch ($type) {
            case HistogramChart::class:
                return new HistogramChart();
            case PieChart::class:
                return new PieChart();
            case LineChart::class:
                return new LineChart();
            default:
                throw new Exception('Invalid chart type');
        }
    }
}

<?php

declare(strict_types=1);

namespace Tests\Unit\SimpleFactory\Solution;

use Shenlink\DesignPattern\SimpleFactory\Solution\ChartFactory;
use Shenlink\DesignPattern\SimpleFactory\Solution\HistogramChart;
use Shenlink\DesignPattern\SimpleFactory\Solution\LineChart;
use Shenlink\DesignPattern\SimpleFactory\Solution\PieChart;
use Exception;
use Tests\Support\OutputCapture;
use PHPUnit\Framework\TestCase;

// 图表工厂测试类
class  ChartFactoryTest extends TestCase
{
    public function testCreateChart()
    {
        $chartFactory = new ChartFactory();
        $chart = $chartFactory->createChart(LineChart::class);
        $this->assertInstanceOf(LineChart::class, $chart);
        $output = OutputCapture::capture(fn() => $chart->display());
        $this->assertEquals('显示折线图', $output);

        $chart = $chartFactory->createChart(HistogramChart::class);
        $this->assertInstanceOf(HistogramChart::class, $chart);
        $output = OutputCapture::capture(fn() => $chart->display());
        $this->assertEquals('显示柱状图', $output);

        $chart = $chartFactory->createChart(PieChart::class);
        $this->assertInstanceOf(PieChart::class, $chart);
        $output = OutputCapture::capture(fn() => $chart->display());
        $this->assertEquals('显示饼状图', $output);
    }

    // 测试创建图表失败
    public function testCreateChartFailed()
    {
        $chartFactory = new ChartFactory();
        $this->expectException(Exception::class);
        $chartFactory->createChart('c');
    }
}

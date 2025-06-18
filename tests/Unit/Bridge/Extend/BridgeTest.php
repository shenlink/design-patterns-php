<?php

declare(strict_types=1);

namespace Tests\Unit\Bridge\Extend;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Bridge\Extend\Blue;
use Shenlink\DesignPattern\Bridge\Extend\Circle;
use Shenlink\DesignPattern\Bridge\Extend\Color;
use Shenlink\DesignPattern\Bridge\Extend\DrawStyle;
use Shenlink\DesignPattern\Bridge\Extend\Fill;
use Shenlink\DesignPattern\Bridge\Extend\Green;
use Shenlink\DesignPattern\Bridge\Extend\Outline;
use Shenlink\DesignPattern\Bridge\Extend\Red;
use Shenlink\DesignPattern\Bridge\Extend\Shape;
use Shenlink\DesignPattern\Bridge\Extend\Square;
use Shenlink\DesignPattern\Bridge\Extend\Triangle;
use Tests\Support\OutputCapture;

// 桥接测试类
class BridgeTest extends TestCase
{
    private Shape $shape;
    private Color $color;
    private DrawStyle $drawStyle;

    public function testFillCircle()
    {
        $this->color = new Blue();
        $this->drawStyle = new Fill();
        $this->shape = new Circle($this->color, $this->drawStyle);
        $output = OutputCapture::capture(fn() => $this->shape->draw());
        $this->assertSame('使用填充的方式来画蓝色的圆形', $output);

        $this->color = new Green();
        $this->drawStyle = new Fill();
        $this->shape = new Circle($this->color, $this->drawStyle);
        $output = OutputCapture::capture(fn() => $this->shape->draw());
        $this->assertSame('使用填充的方式来画绿色的圆形', $output);

        $this->color = new Red();
        $this->drawStyle = new Fill();
        $this->shape = new Circle($this->color, $this->drawStyle);
        $output = OutputCapture::capture(fn() => $this->shape->draw());
        $this->assertSame('使用填充的方式来画红色的圆形', $output);
    }

    public function testOutlineCircle()
    {
        $this->color = new Blue();
        $this->drawStyle = new Outline();
        $this->shape = new Circle($this->color, $this->drawStyle);
        $output = OutputCapture::capture(fn() => $this->shape->draw());
        $this->assertSame('使用描边的方式来画蓝色的圆形', $output);

        $this->color = new Green();
        $this->drawStyle = new Outline();
        $this->shape = new Circle($this->color, $this->drawStyle);
        $output = OutputCapture::capture(fn() => $this->shape->draw());
        $this->assertSame('使用描边的方式来画绿色的圆形', $output);

        $this->color = new Red();
        $this->drawStyle = new Outline();
        $this->shape = new Circle($this->color, $this->drawStyle);
        $output = OutputCapture::capture(fn() => $this->shape->draw());
        $this->assertSame('使用描边的方式来画红色的圆形', $output);
    }

    public function testFillSquare()
    {
        $this->color = new Blue();
        $this->drawStyle = new Fill();
        $this->shape = new Square($this->color, $this->drawStyle);
        $output = OutputCapture::capture(fn() => $this->shape->draw());
        $this->assertSame('使用填充的方式来画蓝色的正方形', $output);

        $this->color = new Green();
        $this->drawStyle = new Fill();
        $this->shape = new Square($this->color, $this->drawStyle);
        $output = OutputCapture::capture(fn() => $this->shape->draw());
        $this->assertSame('使用填充的方式来画绿色的正方形', $output);

        $this->color = new Red();
        $this->drawStyle = new Fill();
        $this->shape = new Square($this->color, $this->drawStyle);
        $output = OutputCapture::capture(fn() => $this->shape->draw());
        $this->assertSame('使用填充的方式来画红色的正方形', $output);
    }

    public function testOutlineSquare()
    {
        $this->color = new Blue();
        $this->drawStyle = new Outline();
        $this->shape = new Square($this->color, $this->drawStyle);
        $output = OutputCapture::capture(fn() => $this->shape->draw());
        $this->assertSame('使用描边的方式来画蓝色的正方形', $output);

        $this->color = new Green();
        $this->drawStyle = new Outline();
        $this->shape = new Square($this->color, $this->drawStyle);
        $output = OutputCapture::capture(fn() => $this->shape->draw());
        $this->assertSame('使用描边的方式来画绿色的正方形', $output);

        $this->color = new Red();
        $this->drawStyle = new Outline();
        $this->shape = new Square($this->color, $this->drawStyle);
        $output = OutputCapture::capture(fn() => $this->shape->draw());
        $this->assertSame('使用描边的方式来画红色的正方形', $output);
    }

    public function testFillTriangle()
    {
        $this->color = new Blue();
        $this->drawStyle = new Fill();
        $this->shape = new Triangle($this->color, $this->drawStyle);
        $output = OutputCapture::capture(fn() => $this->shape->draw());
        $this->assertSame('使用填充的方式来画蓝色的三角形', $output);

        $this->color = new Green();
        $this->drawStyle = new Fill();
        $this->shape = new Triangle($this->color, $this->drawStyle);
        $output = OutputCapture::capture(fn() => $this->shape->draw());
        $this->assertSame('使用填充的方式来画绿色的三角形', $output);

        $this->color = new Red();
        $this->drawStyle = new Fill();
        $this->shape = new Triangle($this->color, $this->drawStyle);
        $output = OutputCapture::capture(fn() => $this->shape->draw());
        $this->assertSame('使用填充的方式来画红色的三角形', $output);
    }

    public function testOutlineTriangle()
    {
        $this->color = new Blue();
        $this->drawStyle = new Outline();
        $this->shape = new Triangle($this->color, $this->drawStyle);
        $output = OutputCapture::capture(fn() => $this->shape->draw());
        $this->assertSame('使用描边的方式来画蓝色的三角形', $output);

        $this->color = new Green();
        $this->drawStyle = new Outline();
        $this->shape = new Triangle($this->color, $this->drawStyle);
        $output = OutputCapture::capture(fn() => $this->shape->draw());
        $this->assertSame('使用描边的方式来画绿色的三角形', $output);

        $this->color = new Red();
        $this->drawStyle = new Outline();
        $this->shape = new Triangle($this->color, $this->drawStyle);
        $output = OutputCapture::capture(fn() => $this->shape->draw());
        $this->assertSame('使用描边的方式来画红色的三角形', $output);
    }
}

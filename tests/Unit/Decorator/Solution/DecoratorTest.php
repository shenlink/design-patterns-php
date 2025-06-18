<?php

declare(strict_types=1);

namespace Tests\Unit\Decorator\Solution;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Decorator\Solution\BlackBorder;
use Shenlink\DesignPattern\Decorator\Solution\Component;
use Shenlink\DesignPattern\Decorator\Solution\Decorator;
use Shenlink\DesignPattern\Decorator\Solution\ListBox;
use Shenlink\DesignPattern\Decorator\Solution\ScrollBar;
use Shenlink\DesignPattern\Decorator\Solution\Window;
use Tests\Support\OutputCapture;

// 装饰者测试类
class DecoratorTest extends TestCase
{
    private Decorator $decorator;
    private Component $component;

    public function testDecorateWindow()
    {
        $this->component = new Window();
        $this->decorator = new BlackBorder($this->component);
        $output = OutputCapture::capture(fn() => $this->decorator->display());
        $this->assertSame('显示窗体' . PHP_EOL . '为构件增加黑色边框' . PHP_EOL, $output);

        $this->decorator = new ScrollBar($this->decorator);
        $output = OutputCapture::capture(fn() => $this->decorator->display());
        $this->assertSame('显示窗体' . PHP_EOL . '为构件增加黑色边框' . PHP_EOL . '为构件增加滚动条' . PHP_EOL, $output);
    }

    public function testDecorateListBox()
    {
        $this->component = new ListBox();
        $this->decorator = new BlackBorder($this->component);
        $output = OutputCapture::capture(fn() => $this->decorator->display());
        $this->assertSame('显示列表框' . PHP_EOL . '为构件增加黑色边框' . PHP_EOL, $output);

        $this->decorator = new ScrollBar($this->decorator);
        $output = OutputCapture::capture(fn() => $this->decorator->display());
        $this->assertSame('显示列表框' . PHP_EOL . '为构件增加黑色边框' . PHP_EOL . '为构件增加滚动条' . PHP_EOL, $output);
    }
}
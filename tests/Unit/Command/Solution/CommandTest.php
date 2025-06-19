<?php

declare(strict_types=1);

namespace Tests\Unit\Command\Solution;

use Shenlink\DesignPattern\Command\Solution\FBSettingWindow;
use Shenlink\DesignPattern\Command\Solution\FunctionButton;
use Shenlink\DesignPattern\Command\Solution\HelpCommand;
use Shenlink\DesignPattern\Command\Solution\MinimizeCommand;
use Tests\Support\OutputCapture;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testCommand()
    {
        $window = new FBSettingWindow('窗口标题');
        $button1 = new FunctionButton('帮助');
        $button1->setCommand(new HelpCommand());
        $button2 = new FunctionButton('最小化');
        $button2->setCommand(new MinimizeCommand());
        $window->addFunctionButton($button1);
        $window->addFunctionButton($button2);
        $output = OutputCapture::capture(fn() => $window->display());
        $this->assertSame('显示窗口：窗口标题' . PHP_EOL . '显示功能键：' . PHP_EOL . '功能键：帮助' . PHP_EOL . '功能键：最小化' . PHP_EOL . '-----------------------------------------', $output);
        $output = OutputCapture::capture(fn() => $button1->onClick());
        $this->assertSame('点击功能键显示帮助文档' . PHP_EOL, $output);
        $output = OutputCapture::capture(fn() => $button2->onClick());
        $this->assertSame('点击功能键将窗口最小化至托盘' . PHP_EOL, $output);
    }
}

<?php

declare(strict_types=1);

namespace Tests\Unit\Mediator\Solution;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Mediator\Solution\Button;
use Shenlink\DesignPattern\Mediator\Solution\ComboBox;
use Shenlink\DesignPattern\Mediator\Solution\ConcreteMediator;
use Shenlink\DesignPattern\Mediator\Solution\TextBox;
use Shenlink\DesignPattern\Mediator\Solution\ListBox;
use Tests\Support\OutputCapture;

// 中介者测试
class MediatorTest extends TestCase
{
    public function testMediator(): void
    {
        // 创建中介者对象
        $mediator = new ConcreteMediator();

        // 创建同事对象
        $button = new Button($mediator);
        $listBox = new ListBox($mediator);
        $comboBox = new ComboBox($mediator);
        $textBox = new TextBox($mediator);
        // 将同事对象注入中介者中
        $mediator->setButton($button);
        $mediator->setList($listBox);
        $mediator->setTextBox($textBox);
        $mediator->setComboBox($comboBox);

        // 模拟组件交互行为
        $output = OutputCapture::capture(fn() => $button->changed());
        $this->assertEquals('列表框增加一项：张无忌。' . PHP_EOL . '组合框增加一项：张无忌。' . PHP_EOL . '客户信息增加成功后文本框清空。' . PHP_EOL, $output);
        $output = OutputCapture::capture(fn() => $listBox->changed());
        $this->assertEquals('组合框选中项：小龙女。' . PHP_EOL . '文本框显示：小龙女。' . PHP_EOL, $output);
    }
}

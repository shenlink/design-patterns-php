<?php

declare(strict_types=1);

namespace Tests\Unit\Interpreter\Basic;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Interpreter\Basic\Add;
use Shenlink\DesignPattern\Interpreter\Basic\Context;
use Shenlink\DesignPattern\Interpreter\Basic\Number;
use Shenlink\DesignPattern\Interpreter\Basic\Subtract;

// 解释器测试
class InterpreterTest extends TestCase
{
    public function testInterpreter()
    {
        // 创建 Context 对象
        $context = new Context();

        // 在 context 中设置变量
        $context->set("x", 7);
        $context->set("y", 3);
        $context->set("z", 2);

        // 使用变量名创建表达式
        $x = new Number("x");
        $y = new Number("y");
        $z = new Number("z");

        // 构造表达式 (x + y) - z
        $add = new Add($x, $y);
        $subtract = new Subtract($add, $z);

        // 计算结果
        $this->assertEquals(8, $subtract->interpret($context));
    }
}
<?php

declare(strict_types=1);

namespace Tests\Unit\Interpreter\Solution;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Interpreter\Solution\InstructionHandler;

// 解释器测试
class InterpreterTest extends TestCase
{
    public function testInterpreter()
    {
        $instruction = 'up move 5 and down run 10 and left move 5';
        $handler = new InstructionHandler();
        $handler->handle($instruction);
        $outString = $handler->output();
        $this->assertSame('向上移动5再向下快速移动10再向左移动5', $outString);
    }
}
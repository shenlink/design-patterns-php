<?php

declare(strict_types=1);

namespace Tests\Unit\Command\Calculator;

use Shenlink\DesignPattern\Command\Calculator\AddCommand;
use Shenlink\DesignPattern\Command\Calculator\Calculator;
use Shenlink\DesignPattern\Command\Calculator\DivideCommand;
use Shenlink\DesignPattern\Command\Calculator\MultiplyCommand;
use Shenlink\DesignPattern\Command\Calculator\SubCommand;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testAdd()
    {
        $command = new AddCommand(0);
        $calculator = new Calculator($command);
        $calculator->compute(1);
        $calculator->compute(2);
        $calculator->compute(3);
        $this->assertSame(6, $calculator->getResult());
        $calculator->undo();
        $this->assertSame(3, $calculator->getResult());
    }

    public function testSubtract()
    {
        $command = new SubCommand(0);
        $calculator = new Calculator($command);
        $calculator->compute(1);
        $calculator->compute(2);
        $calculator->compute(3);
        $this->assertSame(-6, $calculator->getResult());
        $calculator->undo();
        $this->assertSame(-3, $calculator->getResult());
    }

    public function testMultiply()
    {
        $command = new MultiplyCommand(1);
        $calculator = new Calculator($command);
        $calculator->compute(1);
        $calculator->compute(2);
        $calculator->compute(3);
        $this->assertSame(6, $calculator->getResult());
        $calculator->undo();
        $this->assertSame(2, $calculator->getResult());
    }

    public function testDivide()
    {
        $command = new DivideCommand(30);
        $calculator = new Calculator($command);
        $calculator->compute(3);
        $calculator->compute(2);
        $calculator->compute(5);
        $this->assertSame(1, $calculator->getResult());
        $calculator->undo();
        $this->assertSame(5, $calculator->getResult());
    }
}

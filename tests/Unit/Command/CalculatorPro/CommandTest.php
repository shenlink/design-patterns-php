<?php

declare(strict_types=1);

namespace Tests\Unit\Command\CalculatorPro;

use Shenlink\DesignPattern\Command\CalculatorPro\AddCommand;
use Shenlink\DesignPattern\Command\CalculatorPro\Calculator;
use Shenlink\DesignPattern\Command\CalculatorPro\DivideCommand;
use Shenlink\DesignPattern\Command\CalculatorPro\MultiplyCommand;
use Shenlink\DesignPattern\Command\CalculatorPro\SubCommand;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testAdd()
    {
        $command = new AddCommand(0);
        $calculator = new Calculator($command);
        for ($i = 1; $i <= 10; $i++) {
            $calculator->compute($i);
        }
        $this->assertSame(55, $calculator->getResult());
        $calculator->undo();
        $this->assertSame(45, $calculator->getResult());
        $calculator->redo();
        $this->assertSame(55, $calculator->getResult());
        for ($i = 1; $i <= 10; $i++) {
            $calculator->undo();
        }
        $this->assertSame(0, $calculator->getResult());
        $calculator->undo();
        $this->assertSame(0, $calculator->getResult());
        for ($i = 1; $i <= 10; $i++) {
            $calculator->redo();
        }
        $this->assertSame(55, $calculator->getResult());
        $calculator->redo();
        $this->assertSame(55, $calculator->getResult());
    }

    public function testSubtract()
    {
        $command = new SubCommand(0);
        $calculator = new Calculator($command);
        for ($i = 1; $i <= 10; $i++) {
            $calculator->compute($i);
        }
        $this->assertSame(-55, $calculator->getResult());
        $calculator->undo();
        $this->assertSame(-45, $calculator->getResult());
        $calculator->redo();
        $this->assertSame(-55, $calculator->getResult());
        for ($i = 1; $i <= 10; $i++) {
            $calculator->undo();
        }
        $this->assertSame(0, $calculator->getResult());
        $calculator->undo();
        $this->assertSame(0, $calculator->getResult());
        for ($i = 1; $i <= 10; $i++) {
            $calculator->redo();
        }
        $this->assertSame(-55, $calculator->getResult());
        $calculator->redo();
        $this->assertSame(-55, $calculator->getResult());
    }

    public function testMultiply()
    {
        $command = new MultiplyCommand(1);
        $calculator = new Calculator($command);
        for ($i = 1; $i <= 10; $i++) {
            $calculator->compute($i);
        }
        $this->assertSame(3628800, $calculator->getResult());
        $calculator->undo();
        $this->assertSame(362880, $calculator->getResult());
        $calculator->redo();
        $this->assertSame(3628800, $calculator->getResult());
        for ($i = 1; $i <= 10; $i++) {
            $calculator->undo();
        }
        $this->assertSame(1, $calculator->getResult());
        $calculator->undo();
        $this->assertSame(1, $calculator->getResult());
        for ($i = 1; $i <= 10; $i++) {
            $calculator->redo();
        }
        $this->assertSame(3628800, $calculator->getResult());
        $calculator->redo();
        $this->assertSame(3628800, $calculator->getResult());
    }

    public function testDivide()
    {
        $command = new DivideCommand(3628800);
        $calculator = new Calculator($command);
        for ($i = 1; $i <= 10; $i++) {
            $calculator->compute($i);
        }
        $this->assertSame(1, $calculator->getResult());
        $calculator->undo();
        $this->assertSame(10, $calculator->getResult());
        $calculator->redo();
        $this->assertSame(1, $calculator->getResult());
        for ($i = 1; $i <= 10; $i++) {
            $calculator->undo();
        }
        $this->assertSame(3628800, $calculator->getResult());
        $calculator->undo();
        $this->assertSame(3628800, $calculator->getResult());
        for ($i = 1; $i <= 10; $i++) {
            $calculator->redo();
        }
        $this->assertSame(1, $calculator->getResult());
        $calculator->redo();
        $this->assertSame(1, $calculator->getResult());
    }
}

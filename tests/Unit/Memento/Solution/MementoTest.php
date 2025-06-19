<?php

declare(strict_types=1);

namespace Tests\Unit\Memento\Solution;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Memento\Solution\Chessman;
use Shenlink\DesignPattern\Memento\Solution\MementoCaretaker;

// 备忘录测试
class MementoTest extends TestCase
{
    public function testMemento()
    {
        $chessman = new Chessman('车', 1, 1);
        $caretaker = new MementoCaretaker();
        $caretaker->setMemento($chessman->createMemento());

        $chessman->restoreMemento($caretaker->getMemento());
        $this->assertEquals('车', $chessman->getLabel());
        $this->assertEquals(1, $chessman->getX());
        $this->assertEquals(1, $chessman->getY());
    }
}
<?php

declare(strict_types=1);

namespace Tests\Unit\Memento\Extend;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Memento\Extend\Chessman;
use Shenlink\DesignPattern\Memento\Extend\MementoCaretaker;

// 备忘录测试
class MementoTest extends TestCase
{
    public function testMemento()
    {
        $caretaker = new MementoCaretaker();
        $chessman = new Chessman('车', 1, 1);
        $this->assertNull($caretaker->undo());
        $caretaker->setMemento($chessman->createMemento());
        $chessman->setLabel('马');
        $chessman->setX(2);
        $chessman->setY(2);
        $caretaker->setMemento($chessman->createMemento());

        $chessman->restoreMemento($caretaker->undo());
        $this->assertEquals('马', $chessman->getLabel());
        $this->assertEquals(2, $chessman->getX());
        $this->assertEquals(2, $chessman->getY());
        $chessman->restoreMemento($caretaker->undo());
        $this->assertEquals('车', $chessman->getLabel());
        $this->assertEquals(1, $chessman->getX());
        $this->assertEquals(1, $chessman->getY());

        $chessman->restoreMemento($caretaker->redo());
        $this->assertEquals('车', $chessman->getLabel());
        $this->assertEquals(1, $chessman->getX());
        $this->assertEquals(1, $chessman->getY());

        $chessman->setLabel('炮');
        $chessman->setX(3);
        $chessman->setY(3);
        $caretaker->setMemento($chessman->createMemento());
        $this->assertNull($caretaker->redo());
        $chessman->restoreMemento($caretaker->undo());
        $this->assertEquals('炮', $chessman->getLabel());
        $this->assertEquals(3, $chessman->getX());
        $this->assertEquals(3, $chessman->getY());
    }
}
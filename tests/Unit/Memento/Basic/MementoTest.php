<?php

declare(strict_types=1);

namespace Tests\Unit\Memento\Basic;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Memento\Basic\Caretaker;
use Shenlink\DesignPattern\Memento\Basic\Originator;

// 备忘录测试
class MementoTest extends TestCase
{
    public function testMemento()
    {
        $originator = new Originator();
        $caretaker = new Caretaker();

        $originator->setState('State #1');
        $caretaker->setMemento($originator->createMemento());

        $originator->restoreMemento($caretaker->getMemento());
        $this->assertEquals('State #1', $originator->getState());
    }
}
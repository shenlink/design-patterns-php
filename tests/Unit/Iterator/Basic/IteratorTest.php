<?php

declare(strict_types=1);

namespace Tests\Unit\Iterator\Basic;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Iterator\Basic\ConcreteAggregate;

// 迭代器测试
class IteratorTest extends TestCase
{
    public function testIterator(): void
    {
        $array = ['test1', 'test2', 'test3'];
        $aggregate = new ConcreteAggregate($array);
        $iterator = $aggregate->createIterator();
        $i = 0;
        while ($iterator->hasNext()) {
            $this->assertSame($array[$i], $iterator->next());
            $i++;
        }
    }
}
<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Iterator\Basic;

class ConcreteIterator implements Iterator
{
    // 这里不使用Aggregate，因为ConcreteIterator和ConcreteAggregate的关系更加密切
    // 如果非要使用Aggregate的话，那就需要再Aggregate定义获取到Aggregate内部的数据结构元素的方法了，比如定义一个getItem()方法
    // 这体现的是设计模式中的取舍，就像命令模式中的具体命令对象持有的是具体的接受者对象一样
    private ConcreteAggregate $collection;
    private int $position = -1;

    public function __construct(ConcreteAggregate $collection)
    {
        $this->collection = $collection;
    }

    public function hasNext(): bool
    {
        return $this->position + 1 < count($this->collection);
    }

    public function next(): string
    {
        $this->position++;
        return $this->collection->getItem($this->position);
    }
}
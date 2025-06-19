<?php

declare(strict_types=1);

namespace Tests\Unit\Iterator\Solution;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Iterator\Solution\ProductList;

// 迭代器测试
class IteratorTest extends TestCase
{
    public function testIterator(): void
    {
        // 初始化聚合对象并添加元素
        $products = new ProductList([
            '倚天剑',
            '屠龙刀',
            '断肠草',
            '葵花宝典',
            '四十二章经'
        ]);

        // 创建迭代器
        $iterator = $products->createIterator();

        // 正向遍历
        $forwardResult = [];
        while (!$iterator->isLast()) {
            $forwardResult[] = $iterator->getNextItem();
            $iterator->next();
        }
        // 验证正向遍历结果
        $this->assertEquals(["倚天剑", "屠龙刀", "断肠草", "葵花宝典", "四十二章经"], $forwardResult);

        // 逆向遍历
        $backwardResult = [];
        while (!$iterator->isFirst()) {
            $backwardResult[] = $iterator->getPrevItem();
            $iterator->prev();
        }
        // 验证逆向遍历结果
        $this->assertEquals(["四十二章经", "葵花宝典", "断肠草", "屠龙刀", "倚天剑"], $backwardResult);
    }
}

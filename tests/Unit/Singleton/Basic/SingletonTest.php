<?php

declare(strict_types=1);

namespace Tests\Unit\Singleton\Basic;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Singleton\Basic\Singleton;
use RuntimeException;

// 单例测试
class SingletonTest extends TestCase
{
    // 测试获取实例
    public function testGetInstance()
    {
        $singleton1 = Singleton::getInstance();
        $singleton2 = Singleton::getInstance();

        $this->assertSame($singleton1, $singleton2);
    }

    // 测试反序列化
    public function testUnserializeThrowsException()
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('反序列化不被允许');

        $singleton = Singleton::getInstance();
        $serialized = serialize($singleton);
        unserialize($serialized);
    }
}
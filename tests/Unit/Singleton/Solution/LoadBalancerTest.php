<?php

declare(strict_types=1);

namespace Tests\Unit\Singleton\Solution;

use Shenlink\DesignPattern\Singleton\Solution\LoadBalancer;
use PHPUnit\Framework\TestCase;

// 负载均衡器测试
class LoadBalancerTest extends TestCase
{
    // 测试获取实例
    public function testGetInstance()
    {
        $loadBalancer1 = LoadBalancer::getInstance();
        $loadBalancer2 = LoadBalancer::getInstance();

        $this->assertSame($loadBalancer1, $loadBalancer2);
    }

    // 测试添加服务器
    public function testAddServer()
    {
        $loadBalancer = LoadBalancer::getInstance();
        $loadBalancer->clearServerList();

        $loadBalancer->addServer('192.168.1.1');
        $loadBalancer->addServer('192.168.1.2');
        $loadBalancer->addServer('192.168.1.3');

        $this->assertSame(3, $loadBalancer->getServerCount());
    }

    // 测试获取服务器
    public function testGetServer()
    {
        $loadBalancer = LoadBalancer::getInstance();
        $loadBalancer->clearServerList();

        $loadBalancer->addServer('192.168.1.1');
        $this->assertSame('192.168.1.1', $loadBalancer->getServer());
    }

    // 测试删除服务器
    public function testRemoveServer()
    {
        $loadBalancer = LoadBalancer::getInstance();
        $loadBalancer->clearServerList();

        $loadBalancer->addServer('192.168.1.1');
        $loadBalancer->addServer('192.168.1.2');
        $loadBalancer->addServer('192.168.1.3');
        $this->assertSame(3, $loadBalancer->getServerCount());

        $loadBalancer->removeServer('192.168.1.2');
        $this->assertSame(2, $loadBalancer->getServerCount());
    }

    // 测试获取服务器数量
    public function testGetServerCount()
    {
        $loadBalancer = LoadBalancer::getInstance();
        $loadBalancer->clearServerList();

        $loadBalancer->addServer('192.168.1.1');
        $loadBalancer->addServer('192.168.1.2');
        $loadBalancer->addServer('192.168.1.3');
        $this->assertSame(3, $loadBalancer->getServerCount());
    }

    // 测试清空服务器列表
    public function testClearServerList()
    {
        $loadBalancer = LoadBalancer::getInstance();
        $loadBalancer->clearServerList();

        $loadBalancer->addServer('192.168.1.1');
        $loadBalancer->addServer('192.168.1.2');
        $loadBalancer->addServer('192.168.1.3');
        $this->assertSame(3, $loadBalancer->getServerCount());

        $loadBalancer->clearServerList();
        $this->assertSame(0, $loadBalancer->getServerCount());
    }
}

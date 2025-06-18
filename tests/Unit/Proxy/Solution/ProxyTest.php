<?php

declare(strict_types=1);

namespace Tests\Unit\Proxy\Solution;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Proxy\Solution\ProxySearcher;
use Shenlink\DesignPattern\Proxy\Solution\Searcher;

// 代理测试类
class ProxyTest extends TestCase
{
    private Searcher $searcher;

    public function testProxy()
    {
        $this->searcher = new ProxySearcher();
        $result = $this->searcher->search('test', 'keyword');
        $this->assertSame('无权限', $result);

        $result = $this->searcher->search('admin', 'keyword');
        $this->assertSame('用户admin使用关键词：keyword查询了商务信息', $result);
    }
}
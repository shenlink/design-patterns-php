<?php

declare(strict_types=1);

namespace Tests\Unit\Adapter\Basic;

use Shenlink\DesignPattern\Adapter\Basic\Adapter;
use Tests\Support\OutputCapture;
use PHPUnit\Framework\TestCase;

// 适配器测试类
class AdapterTest extends TestCase
{
    public function testAdapter()
    {
        $adapter = new Adapter();
        $output = OutputCapture::capture(fn() => $adapter->request());
        $this->assertSame('Adaptee specific request', $output);
    }
}
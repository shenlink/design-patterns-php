<?php

declare(strict_types=1);

namespace Tests\Unit\Proxy\Basic;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Proxy\Basic\Proxy;
use Shenlink\DesignPattern\Proxy\Basic\Subject;
use Tests\Support\OutputCapture;

// 代理测试类
class ProxyTest extends TestCase
{
    private Subject $proxy;

    public function testProxy()
    {
        $this->proxy = new Proxy();
        $output = OutputCapture::capture(fn() => $this->proxy->request());
        $this->assertEquals('Proxy preRequest' . PHP_EOL . 'RealSubject request' . PHP_EOL . 'Proxy postRequest' . PHP_EOL, $output);
    }
}


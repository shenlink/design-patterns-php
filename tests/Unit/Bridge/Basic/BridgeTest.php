<?php

declare(strict_types=1);

namespace Tests\Unit\Bridge\Basic;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Bridge\Basic\Abstraction;
use Shenlink\DesignPattern\Bridge\Basic\RefinedAbstraction;
use Shenlink\DesignPattern\Bridge\Basic\RefinedImplementor;
use Tests\Support\OutputCapture;

// 桥接测试类
class BridgeTest extends TestCase
{
    private Abstraction $refinedAbstraction;

    public function testBridge()
    {
        $this->refinedAbstraction = new RefinedAbstraction(new RefinedImplementor());
        $output = OutputCapture::capture(fn() => $this->refinedAbstraction->operation());
        $this->assertSame('实现器实现类', $output);
    }
}
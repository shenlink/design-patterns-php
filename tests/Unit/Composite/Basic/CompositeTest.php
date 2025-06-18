<?php

declare(strict_types=1);

namespace Tests\Unit\Composite\Basic;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Composite\Basic\Composite;
use Shenlink\DesignPattern\Composite\Basic\Leaf;
use Tests\Support\OutputCapture;

// 组合测试类
class CompositeTest extends TestCase
{
    public function testComposite(): void
    {
        $leaf1 = new Leaf();
        $leaf2 = new Leaf();
        $leaf3 = new Leaf();

        $composite = new Composite();
        $composite->add($leaf1);
        $composite->add($leaf2);
        $composite->add($leaf3);

        $output = OutputCapture::capture(fn() => $composite->operation());
        $this->assertSame('Leaf operation' . PHP_EOL . 'Leaf operation' . PHP_EOL . 'Leaf operation' . PHP_EOL, $output);
    }
}
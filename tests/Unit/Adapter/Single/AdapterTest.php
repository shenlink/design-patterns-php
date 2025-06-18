<?php

declare(strict_types=1);

namespace Tests\Unit\Adapter\Single;

use Shenlink\DesignPattern\Adapter\Single\Adapter;
use Tests\Support\OutputCapture;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testAdapter()
    {
        $adapter = new Adapter();
        $output = OutputCapture::capture(fn() => $adapter->method1());
        $this->assertSame('Adapter method1', $output);
    }
}
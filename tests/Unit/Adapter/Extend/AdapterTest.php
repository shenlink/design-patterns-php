<?php

declare(strict_types=1);

namespace Tests\Unit\Adapter\Extend;

use Shenlink\DesignPattern\Adapter\Extend\Adapter;
use Tests\Support\OutputCapture;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testAdapter()
    {
        $adapter = new Adapter();
        $output = OutputCapture::capture(fn() => $adapter->request());
        $this->assertSame('Adaptee specific request', $output);
    }
}
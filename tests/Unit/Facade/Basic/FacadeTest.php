<?php

declare(strict_types=1);

namespace Tests\Unit\Facade\Basic;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Facade\Basic\Facade;
use Shenlink\DesignPattern\Facade\Basic\SubSystemA;
use Shenlink\DesignPattern\Facade\Basic\SubSystemB;
use Shenlink\DesignPattern\Facade\Basic\SubSystemC;
use Tests\Support\OutputCapture;

// 外观测试类
class FacadeTest extends TestCase
{
    public function testFacade()
    {
        $subSystemA = new SubSystemA();
        $subSystemB = new SubSystemB();
        $subSystemC = new SubSystemC();
        $facade = new Facade($subSystemA, $subSystemB, $subSystemC);
        $output = OutputCapture::capture(fn() => $facade->operation());
        $this->assertEquals('SubSystemA operation' . PHP_EOL . 'SubSystemB operation' . PHP_EOL . 'SubSystemC operation' . PHP_EOL, $output);
    }
}

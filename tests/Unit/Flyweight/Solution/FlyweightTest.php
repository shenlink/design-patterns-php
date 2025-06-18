<?php

declare(strict_types=1);

namespace Tests\Unit\Flyweight\Solution;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Flyweight\Solution\Coordinates;
use Shenlink\DesignPattern\Flyweight\Solution\IgoChessmanFactory;
use Tests\Support\OutputCapture;

// 享元测试类
class FlyweightTest extends TestCase
{
    public function testFlyweight()
    {
        $factory = IgoChessmanFactory::getInstance();
        $igoChessman = $factory->getIgoChessman('black');
        $coordinates = new Coordinates(1, 1);
        $output = OutputCapture::capture(fn() => $igoChessman->display($coordinates));
        $this->assertSame('棋子颜色：黑色，棋子位置：1，1' . PHP_EOL, $output);

        $igoChessman = $factory->getIgoChessman('white');
        $coordinates = new Coordinates(2, 2);
        $output = OutputCapture::capture(fn() => $igoChessman->display($coordinates));
        $this->assertSame('棋子颜色：白色，棋子位置：2，2' . PHP_EOL, $output);
    }
}
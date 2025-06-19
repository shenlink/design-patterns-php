<?php

declare(strict_types=1);

namespace Tests\Unit\Strategy\Solution;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Strategy\Solution\ChildrenDiscount;
use Shenlink\DesignPattern\Strategy\Solution\MovieTicket;
use Shenlink\DesignPattern\Strategy\Solution\StudentDiscount;
use Shenlink\DesignPattern\Strategy\Solution\VIPDiscount;

// 策略测试
class StrategyTest extends TestCase
{
    public function testStrategy()
    {
        $movieTicket = new MovieTicket();
        $originalPrice = 60.0;
        $movieTicket->setPrice($originalPrice);
        $movieTicket->setDiscount(new ChildrenDiscount());
        $this->assertEquals(50.0, $movieTicket->getPrice());
        $movieTicket->setDiscount(new StudentDiscount());
        $this->assertEquals(48.0, $movieTicket->getPrice());
        $movieTicket->setDiscount(new VIPDiscount());
        $this->assertEquals(30.0, $movieTicket->getPrice());
    }
}
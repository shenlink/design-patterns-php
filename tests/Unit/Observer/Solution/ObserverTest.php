<?php

declare(strict_types=1);

namespace Tests\Unit\Observer\Solution;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Observer\Solution\ConcreteAllyControlCenter;
use Shenlink\DesignPattern\Observer\Solution\Player;
use Tests\Support\OutputCapture;

// 观察者测试
class ObserverTest extends TestCase
{
    public function testObserver()
    {
        $acc = new ConcreteAllyControlCenter('天才战队');
        $player1 = new Player('张三');
        $player2 = new Player('李四');
        $player3 = new Player('王五');
        $acc->join($player1);
        $acc->join($player2);
        $acc->join($player3);

        $output = OutputCapture::capture(fn() => $player1->beAttacked($acc));
        $this->assertSame('坚持住，李四来救你了' . PHP_EOL . '坚持住，王五来救你了' . PHP_EOL, $output);

        $output = OutputCapture::capture(fn() => $player2->beAttacked($acc));
        $this->assertSame('坚持住，张三来救你了' . PHP_EOL . '坚持住，王五来救你了' . PHP_EOL, $output);

        $output = OutputCapture::capture(fn() => $player3->beAttacked($acc));
        $this->assertSame('坚持住，张三来救你了' . PHP_EOL . '坚持住，李四来救你了' . PHP_EOL, $output);

        $acc->quit($player1);
        $output = OutputCapture::capture(fn() => $player3->beAttacked($acc));
        $this->assertSame('坚持住，李四来救你了' . PHP_EOL, $output);
    }
}

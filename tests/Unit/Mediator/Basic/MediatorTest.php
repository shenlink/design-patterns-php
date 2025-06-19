<?php

declare(strict_types=1);

namespace Tests\Unit\Mediator\Basic;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Mediator\Basic\ConcreteColleagueA;
use Shenlink\DesignPattern\Mediator\Basic\ConcreteColleagueB;
use Shenlink\DesignPattern\Mediator\Basic\ConcreteMediator;
use Tests\Support\OutputCapture;

// 中介者测试
class MediatorTest extends TestCase
{
    public function testMediator(): void
    {
        $mediator = new ConcreteMediator();
        $colleagueA = new ConcreteColleagueA($mediator);
        $colleagueB = new ConcreteColleagueB($mediator);

        $mediator->register($colleagueA);
        $mediator->register($colleagueB);

        $output = OutputCapture::capture(fn() => $colleagueA->send('Hello from A!'));
        $this->assertSame('Colleague A sending: Hello from A!' . PHP_EOL . 'Colleague B received: Hello from A!' . PHP_EOL, $output);
        $output = OutputCapture::capture(fn() => $colleagueB->send('Hello from B!'));
        $this->assertSame('Colleague B sending: Hello from B!' . PHP_EOL . 'Colleague A received: Hello from B!' . PHP_EOL, $output);
    }
}

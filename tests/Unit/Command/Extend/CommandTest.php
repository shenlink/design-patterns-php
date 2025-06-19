<?php

declare(strict_types=1);

namespace Tests\Unit\Command\Extend;

use Shenlink\DesignPattern\Command\Extend\CommandQueue;
use Shenlink\DesignPattern\Command\Extend\ConcreteCommand;
use Shenlink\DesignPattern\Command\Extend\ConcreteReceiver;
use Shenlink\DesignPattern\Command\Extend\Invoker;
use Tests\Support\OutputCapture;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testCommand()
    {
        $commandQueue = new CommandQueue();
        $receiver = new ConcreteReceiver();
        $command = new ConcreteCommand($receiver);
        $commandQueue->addCommand($command);
        $invoker = new Invoker($commandQueue);
        $output = OutputCapture::capture(fn() => $invoker->call());
        $this->assertSame('ConcreteReceiver action' . PHP_EOL, $output);
    }
}

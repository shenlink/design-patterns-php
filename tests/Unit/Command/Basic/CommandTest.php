<?php

declare(strict_types=1);

namespace Tests\Unit\Command\Basic;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Command\Basic\ConcreteCommand;
use Shenlink\DesignPattern\Command\Basic\ConcreteReceiver;
use Shenlink\DesignPattern\Command\Basic\ICommand;
use Shenlink\DesignPattern\Command\Basic\Invoker;
use Shenlink\DesignPattern\Command\Basic\IReceiver;
use Tests\Support\OutputCapture;

class CommandTest extends TestCase
{
    private IReceiver $receiver;
    private ICommand $command;

    public function testCommand()
    {
        $this->receiver = new ConcreteReceiver();
        $this->command = new ConcreteCommand($this->receiver);
        $invoker = new Invoker($this->command);
        $output = OutputCapture::capture(fn() => $invoker->call());
        $this->assertSame('ConcreteReceiver action' . PHP_EOL, $output);
    }
}

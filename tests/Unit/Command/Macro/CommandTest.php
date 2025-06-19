<?php

declare(strict_types=1);

namespace Tests\Unit\Command\Macro;

use Shenlink\DesignPattern\Command\Macro\ConcreteCommand;
use Shenlink\DesignPattern\Command\Macro\ConcreteReceiver;
use Shenlink\DesignPattern\Command\Macro\Invoker;
use Shenlink\DesignPattern\Command\Macro\ListCommand;
use Tests\Support\OutputCapture;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testCommand()
    {
        $listCommand = new ListCommand();
        $receiver = new ConcreteReceiver();
        $command = new ConcreteCommand($receiver);
        $listCommand->add($command);
        $invoker = new Invoker($listCommand);
        $output = OutputCapture::capture(fn() => $invoker->call());
        $this->assertSame('ConcreteReceiver action' . PHP_EOL, $output);
    }
}
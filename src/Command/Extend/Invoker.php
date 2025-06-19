<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Extend;

class Invoker
{
    private CommandQueue $commandQueue;

    public function __construct(CommandQueue $commandQueue)
    {
        $this->commandQueue = $commandQueue;
    }

    public function setCommandQueue(CommandQueue $commandQueue): void
    {
        $this->commandQueue = $commandQueue;
    }

    public function call(): void
    {
        $this->commandQueue->execute();
    }
}

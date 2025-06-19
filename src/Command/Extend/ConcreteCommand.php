<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Extend;

class ConcreteCommand implements ICommand
{
    private IReceiver $receiver;

    public function __construct(IReceiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute(): void
    {
        $this->receiver->action();
    }
}
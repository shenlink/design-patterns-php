<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Macro;

use Exception;

class ConcreteCommand implements ICommand
{
    private IReceiver $receiver;

    public function __construct(IReceiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function add(ICommand $command)
    {
        throw new Exception('不支持该方法');
    }

    public function remove(ICommand $command): void
    {
        throw new Exception('不支持该方法');
    }

    public function getCommand(int $index): ICommand
    {
        throw new Exception('不支持该方法');
    }

    public function execute(): void
    {
        $this->receiver->action();
    }
}
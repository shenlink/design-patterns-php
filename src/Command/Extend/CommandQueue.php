<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Extend;

class CommandQueue
{
    private array $commands = [];

    public function addCommand(ICommand $command): void
    {
        $this->commands[] = $command;
    }

    public function execute(): void
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }
}
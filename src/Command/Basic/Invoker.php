<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Basic;

class Invoker
{
    private ICommand $command;

    public function __construct(ICommand $command)
    {
        $this->command = $command;
    }

    public function call(): void
    {
        $this->command->execute();
    }
}
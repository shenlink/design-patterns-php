<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Calculator;

class Calculator
{
    private ICommand $command;
    private int $result = 0;

    public function __construct(ICommand $command)
    {
        $this->command = $command;
    }

    public function compute(int $value): void
    {
        $this->result = $this->command->execute($value);
    }

    public function undo(): void
    {
        $this->result = $this->command->undo();
    }

    public function getResult(): int
    {
        return $this->result;
    }
}

<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\CalculatorPro;

class Calculator
{
    private ICommand $command;
    private array $undoList;
    private array $redoList;
    private int $value;
    private int $result = 0;

    public function __construct(ICommand $command)
    {
        $this->command = $command;
    }

    public function compute(int $value): void
    {
        $this->value = $value;
        $this->undoList[] = $value;
        $this->redoList = [];
        $this->result = $this->command->execute($value);
    }

    public function undo(): void
    {
        if (empty($this->undoList)) {
            return;
        }
        $this->value = array_pop($this->undoList);
        $this->redoList[] = $this->value;
        $this->result = $this->command->undo($this->value);
    }

    public function redo(): void
    {
        if (empty($this->redoList)) {
            return;
        }
        $this->value = array_pop($this->redoList);
        $this->undoList[] = $this->value;
        $this->result = $this->command->redo($this->value);
    }

    public function getResult(): int
    {
        return $this->result;
    }
}

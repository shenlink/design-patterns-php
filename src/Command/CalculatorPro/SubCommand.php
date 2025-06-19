<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\CalculatorPro;

class SubCommand implements ICommand
{
    private Subtraction $subtraction;

    public function __construct(int $value)
    {
        $this->subtraction = new Subtraction($value);
    }

    public function execute(int $value): int
    {
        return $this->subtraction->execute($value);
    }

    public function undo(int $value): int
    {
        return $this->subtraction->execute(-$value);
    }

    public function redo(int $value): int
    {
        return $this->subtraction->execute($value);
    }
}
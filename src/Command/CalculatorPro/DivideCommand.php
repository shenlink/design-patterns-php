<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\CalculatorPro;

class DivideCommand implements ICommand
{
    private Division $division;

    public function __construct(int $value)
    {
        $this->division = new Division($value);
    }

    public function execute(int $value): int
    {
        return $this->division->execute($value);
    }

    public function undo(int $value): int
    {
        return $this->division->undo($value);
    }

    public function redo(int $value): int
    {
        return $this->division->execute($value);
    }
}

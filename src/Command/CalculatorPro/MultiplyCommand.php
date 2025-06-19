<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\CalculatorPro;

class MultiplyCommand implements ICommand
{
    private Multiplication $multiplication;

    public function __construct(int $value)
    {
        $this->multiplication = new Multiplication($value);
    }

    public function execute(int $value): int
    {
        return $this->multiplication->execute($value);
    }

    public function undo(int $value): int
    {
        return $this->multiplication->undo($value);
    }

    public function redo(int $value): int
    {
        return $this->multiplication->execute($value);
    }
}

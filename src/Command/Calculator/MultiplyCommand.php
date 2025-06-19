<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Calculator;

class MultiplyCommand implements ICommand
{
    private Multiplication $multiplication;
    private int $value;

    public function __construct(int $value)
    {
        $this->multiplication = new Multiplication($value);
        $this->value = $value;
    }

    public function execute(int $value): int
    {
        $this->value = $value;
        return $this->multiplication->execute($value);
    }

    public function undo(): int
    {
        return $this->multiplication->undo($this->value);
    }
}

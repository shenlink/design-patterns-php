<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Calculator;

class DivideCommand implements ICommand
{
    private Division $division;
    private int $value;

    public function __construct(int $value)
    {
        $this->division = new Division($value);
        $this->value = $value;
    }

    public function execute(int $value): int
    {
        $this->value = $value;
        return $this->division->execute($value);
    }

    public function undo(): int
    {
        return $this->division->undo($this->value);
    }
}

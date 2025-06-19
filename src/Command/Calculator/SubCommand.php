<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Calculator;

class SubCommand implements ICommand
{
    private Subtraction $subtraction;
    private int $value;

    public function __construct(int $value)
    {
        $this->subtraction = new Subtraction($value);
        $this->value = $value;
    }

    public function execute(int $value): int
    {
        $this->value = $value;
        return $this->subtraction->execute($value);
    }

    public function undo(): int
    {
        return $this->subtraction->execute(-$this->value);
    }
}
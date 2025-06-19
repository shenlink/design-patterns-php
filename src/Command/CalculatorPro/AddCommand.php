<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\CalculatorPro;

class AddCommand implements ICommand
{
    private Addition $addition;

    public function __construct(int $value)
    {
        $this->addition = new Addition($value);
    }

    public function execute(int $value): int
    {
        return $this->addition->execute($value);
    }

    public function undo(int $value): int
    {
        return $this->addition->execute(-$value);
    }

    public function redo(int $value): int
    {
        return $this->addition->execute($value);
    }
}

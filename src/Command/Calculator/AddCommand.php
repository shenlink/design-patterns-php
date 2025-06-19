<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Calculator;

class AddCommand implements ICommand
{
    private Addition $addition;
    private int $value;

    public function __construct(int $value)
    {
        $this->addition = new Addition($value);
        $this->value = $value;
    }

    public function execute(int $value): int
    {
        $this->value = $value;
        return $this->addition->execute($value);
    }

    public function undo(): int
    {
        return $this->addition->undo($this->value);
    }
}

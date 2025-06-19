<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Calculator;

class Subtraction implements IReceiver
{
    private int $num;

    public function __construct(int $num)
    {
        $this->num = $num;
    }

    public function execute(int $value): int
    {
        $this->num -= $value;
        return $this->num;
    }

    public function undo(int $value): int
    {
        $this->num += $value;
        return $this->num;
    }
}

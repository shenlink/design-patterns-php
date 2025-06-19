<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Calculator;

class Multiplication implements IReceiver
{
    private int $num;
    private int $prev;

    public function __construct(int $num)
    {
        $this->num = $num;
    }

    public function execute(int $value): int
    {
        $this->prev = $this->num;
        $this->num = $this->num * $value;
        return $this->num;
    }

    public function undo(int $value): int
    {
        $this->num = $this->prev;
        return $this->num;
    }
}

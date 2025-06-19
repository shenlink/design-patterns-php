<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Calculator;

use Exception;

class Division implements IReceiver
{
    private int $num;

    public function __construct(int $num)
    {
        $this->num = $num;
    }

    public function execute(int $value): int
    {
        if ($value === 0) {
            throw new Exception('除数不能为0');
        }
        $this->num = intval($this->num / $value);
        return $this->num;
    }

    public function undo(int $value): int
    {
        $this->num = $this->num * $value;
        return $this->num;
    }
}

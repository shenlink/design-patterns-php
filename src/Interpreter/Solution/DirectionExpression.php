<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Interpreter\Solution;

class DirectionExpression implements Expression
{
    private string $direction;

    public function __construct(string $direction)
    {
        $this->direction = $direction;
    }

    public function interpret(): string
    {
        switch ($this->direction) {
            case 'up':
                return '向上';
            case 'down':
                return '向下';
            case 'left':
                return '向左';
            case 'right':
                return '向右';
            default:
                return '无效指令';
        }
    }
}
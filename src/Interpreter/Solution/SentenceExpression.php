<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Interpreter\Solution;

class SentenceExpression implements Expression
{
    private Expression $direction;
    private Expression $action;
    private Expression $distance;

    public function __construct(Expression $direction, Expression $action, Expression $distance)
    {
        $this->direction = $direction;
        $this->action = $action;
        $this->distance = $distance;
    }

    public function interpret(): string
    {
        return $this->direction->interpret() . $this->action->interpret() . $this->distance->interpret();
    }
}

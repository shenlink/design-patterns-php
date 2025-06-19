<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Interpreter\Solution;

class DistanceExpression implements Expression
{
    private string $distance;

    public function __construct(string $distance)
    {
        $this->distance = $distance;
    }

    public function interpret(): string
    {
        return $this->distance;
    }
}
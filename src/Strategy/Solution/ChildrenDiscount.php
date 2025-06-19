<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Strategy\Solution;

class ChildrenDiscount implements Discount
{
    public function calculate(float $price): float
    {
        return $price - 10 <= 0 ? 0 : $price - 10;
    }
}
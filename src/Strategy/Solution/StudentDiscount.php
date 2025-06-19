<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Strategy\Solution;

class StudentDiscount implements Discount
{
    public function calculate(float $price): float
    {
        return $price * 0.8;
    }
}

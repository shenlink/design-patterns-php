<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Strategy\Solution;

class VIPDiscount implements Discount
{
    public function calculate(float $price): float
    {
        return $price * 0.5;
    }
}
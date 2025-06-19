<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Strategy\Solution;

interface Discount
{
    public function calculate(float $price): float;
}
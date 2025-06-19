<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Strategy\Solution;

class MovieTicket
{
    private Discount $discount;
    private float $price;

    public function setDiscount(Discount $discount): void
    {
        $this->discount = $discount;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->discount->calculate($this->price);
    }
}
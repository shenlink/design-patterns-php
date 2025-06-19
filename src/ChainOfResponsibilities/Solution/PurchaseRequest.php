<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\ChainOfResponsibilities\Solution;

class PurchaseRequest
{
    private float $amount;
    private int $number;
    private string $purpose;

    public function __construct(float $amount, int $number, string $purpose)
    {
        $this->amount = $amount;
        $this->number = $number;
        $this->purpose = $purpose;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function getPurpose(): string
    {
        return $this->purpose;
    }
}

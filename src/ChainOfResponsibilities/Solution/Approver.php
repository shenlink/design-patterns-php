<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\ChainOfResponsibilities\Solution;

abstract class Approver
{
    protected Approver $successor;
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setSuccessor(Approver $successor): void
    {
        $this->successor = $successor;
    }

    public abstract function approve(PurchaseRequest $request): void;
}

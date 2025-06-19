<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\ChainOfResponsibilities\Solution;

class Director extends Approver
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function approve(PurchaseRequest $request): void
    {
        if ($request->getAmount() < 5000) {
            echo '主任' . $this->name . '审批采购单：' . $request->getNumber() . '，金额：' . $request->getAmount() . '元，采购目的：' . $request->getPurpose() . '。' . PHP_EOL;
        } else {
            $this->successor->approve($request);
        }
    }
}

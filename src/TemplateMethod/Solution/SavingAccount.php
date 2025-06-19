<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\TemplateMethod\Solution;

class SavingAccount extends Account
{
    public function calculateInterest(): void
    {
        echo '计算定期利息' . PHP_EOL;
    }
}
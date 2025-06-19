<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\TemplateMethod\Solution;

class CurrentAccount extends Account
{
    public function calculateInterest(): void
    {
        echo '计算活期利息' . PHP_EOL;
    }
}

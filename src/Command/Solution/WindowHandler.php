<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Solution;

class WindowHandler
{
    public function minimize(): void
    {
        echo '将窗口最小化至托盘' . PHP_EOL;
    }
}

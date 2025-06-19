<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Solution;

class HelpHandler
{
    public function display(): void
    {
        echo '显示帮助文档' . PHP_EOL;
    }
}
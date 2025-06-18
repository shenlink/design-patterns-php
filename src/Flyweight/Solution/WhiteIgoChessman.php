<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Flyweight\Solution;

class WhiteIgoChessman extends IgoChessman
{
    public function getColor(): string
    {
        return '白色';
    }
}

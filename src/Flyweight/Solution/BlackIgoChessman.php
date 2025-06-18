<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Flyweight\Solution;

class BlackIgoChessman extends IgoChessman
{
    public function getColor(): string
    {
        return '黑色';
    }
}
<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Bridge\Extend;

class Fill implements DrawStyle
{
    public function draw(): string
    {
        return '填充';
    }
}
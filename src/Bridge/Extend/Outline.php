<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Bridge\Extend;

class Outline implements DrawStyle
{
    public function draw(): string
    {
        return '描边';
    }
}
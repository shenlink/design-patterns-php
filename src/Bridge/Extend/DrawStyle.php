<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Bridge\Extend;

interface DrawStyle
{
    public function draw(): string;
}
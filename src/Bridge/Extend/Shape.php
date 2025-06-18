<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Bridge\Extend;

abstract class Shape
{
    protected Color $color;
    protected DrawStyle $drawStyle;

    public function __construct(Color $color, DrawStyle $drawStyle)
    {
        $this->color = $color;
        $this->drawStyle = $drawStyle;
    }

    abstract public function draw(): void;
} 
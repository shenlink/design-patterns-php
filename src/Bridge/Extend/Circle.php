<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Bridge\Extend;

class Circle extends Shape
{
    public function __construct(Color $color, DrawStyle $drawStyle)
    {
        parent::__construct($color, $drawStyle);
    }

    public function draw(): void
    {
        echo '使用' . $this->drawStyle->draw() . '的方式来画' . $this->color->applyColor() . '的圆形';
    }
}

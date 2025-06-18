<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Bridge\Extend;

class Red implements Color
{
    public function applyColor(): string
    {
        return '红色';
    }
}
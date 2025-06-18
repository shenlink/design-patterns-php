<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Bridge\Extend;

class Blue implements Color
{
    public function applyColor(): string
    {
        return '蓝色';
    }
}
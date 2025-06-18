<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Bridge\Extend;

class Green implements Color
{
    public function applyColor(): string
    {
        return '绿色';
    }
}

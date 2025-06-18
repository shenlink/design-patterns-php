<?php

declare (strict_types=1);

namespace Shenlink\DesignPattern\Adapter\Single;

// 适配者类
class Adapter extends AbstractAdapter
{
    public function method1(): void
    {
        echo 'Adapter method1';
    }
}
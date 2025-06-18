<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Adapter\Extend;

// 适配者类
class Adapter extends Adaptee implements ITarget
{
    public function request(): void
    {
        $this->specificRequest();
    }
}

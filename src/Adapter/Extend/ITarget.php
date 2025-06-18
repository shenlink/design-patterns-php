<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Adapter\Extend;

// 需要适配的目标接口
interface ITarget
{
    public function request(): void;
}
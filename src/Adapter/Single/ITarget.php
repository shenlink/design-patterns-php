<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Adapter\Single;

// 目标接口
interface ITarget
{
    public function method1(): void;

    public function method2(): void;

    public function method3(): void;
}

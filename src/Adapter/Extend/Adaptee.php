<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Adapter\Extend;

// 被适配者类
class Adaptee
{
    public function specificRequest(): void
    {
        echo 'Adaptee specific request';
    }
}
<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Prototype\Basic;

// 其它类，用于测试深拷贝
class Other
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
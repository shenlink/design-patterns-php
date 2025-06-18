<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Prototype\Basic;

// 原型类
class Prototype
{
    private string $name;

    private string $description;

    private Other $other;

    public function __construct(string $name, string $description, Other $other)
    {
        $this->name = $name;
        $this->description = $description;
        $this->other = $other;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getOther(): Other
    {
        return $this->other;
    }

    // 克隆
    public function __clone()
    {
        $this->other = clone $this->other;
    }
}
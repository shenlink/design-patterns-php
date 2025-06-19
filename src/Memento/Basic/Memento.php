<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Memento\Basic;

// 备忘录，存储原发器的内部状态
class Memento
{
    private string $state;

    public function __construct(string $state)
    {
        $this->state = $state;
    }

    public function getState(): string
    {
        return $this->state;
    }
}
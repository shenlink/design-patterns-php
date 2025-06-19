<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Memento\Basic;

// 原发器，负责创建一个备忘录
class Originator
{
    private string $state;

    public function setState(string $state): void
    {
        $this->state = $state;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function createMemento(): Memento
    {
        return new Memento($this->state);
    }

    public function restoreMemento(Memento $memento): void
    {
        $this->state = $memento->getState();
    }

}
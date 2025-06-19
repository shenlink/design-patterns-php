<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Memento\Basic;

// 负责人，负责保存备忘录
class Caretaker
{
    private Memento $memento;

    public function getMemento(): Memento
    {
        return $this->memento;
    }

    public function setMemento(Memento $memento): void
    {
        $this->memento = $memento;
    }
}
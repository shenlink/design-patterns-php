<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Memento\Solution;

// 负责人
class MementoCaretaker
{
    private ChessmanMemento $memento;

    public function getMemento(): ChessmanMemento
    {
        return $this->memento;
    }

    public function setMemento(ChessmanMemento $memento): void
    {
        $this->memento = $memento;
    }
}
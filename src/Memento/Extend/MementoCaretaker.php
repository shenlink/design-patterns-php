<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Memento\Extend;

// 负责人
class MementoCaretaker
{
    private array $undoMementos = [];
    private array $redoMementos = [];

    public function setMemento(ChessmanMemento $memento): void
    {
        $this->undoMementos[] = $memento;
        $this->redoMementos = [];
    }

    public function undo(): ?ChessmanMemento
    {
        if (empty($this->undoMementos)) {
            return null;
        }
        $memento = array_pop($this->undoMementos);
        $this->redoMementos[] = $memento;
        return $memento;
    }

    public function redo(): ?ChessmanMemento
    {
        if (empty($this->redoMementos)) {
            return null;
        }
        $memento = array_pop($this->redoMementos);
        $this->undoMementos[] = $memento;
        return $memento;
    }
}

<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Memento\Extend;

// 棋子类，原发器
class Chessman
{
    private string $label;
    private int $x;
    private int $y;

    public function __construct(string $label, int $x, int $y)
    {
        $this->label = $label;
        $this->x = $x;
        $this->y = $y;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    public function setX(int $x): void
    {
        $this->x = $x;
    }

    public function setY(int $y): void
    {
        $this->y = $y;
    }

    public function createMemento(): ChessmanMemento
    {
        return new ChessmanMemento($this->label, $this->x, $this->y);
    }

    public function restoreMemento(ChessmanMemento $memento): void
    {
        $this->label = $memento->getLabel();
        $this->x = $memento->getX();
        $this->y = $memento->getY();
    }
}
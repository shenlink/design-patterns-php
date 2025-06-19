<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Memento\Solution;

// 备忘录，
class ChessmanMemento
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
}
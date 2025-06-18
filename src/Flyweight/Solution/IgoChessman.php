<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Flyweight\Solution;

// 围棋类
abstract class IgoChessman
{
    public abstract function getColor(): string;

    public function display(Coordinates $coordinates): void
    {
        echo '棋子颜色：' . $this->getColor() . '，棋子位置：' . $coordinates->getX() . '，' . $coordinates->getY() . PHP_EOL;
    }
}
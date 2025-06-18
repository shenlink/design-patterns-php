<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Bridge\Solution;

class Linux implements IOperatingSystem
{
    public function doPaint(Matrix $matrix): void
    {
        echo '在linux操作系统中显示图像，';
    }
}
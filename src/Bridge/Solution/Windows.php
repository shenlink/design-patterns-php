<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Bridge\Solution;

class Windows implements IOperatingSystem
{
    public function doPaint(Matrix $matrix): void
    {
        echo '在windows操作系统中显示图像，';
    }
}
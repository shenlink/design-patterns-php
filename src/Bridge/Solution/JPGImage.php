<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Bridge\Solution;

class JPGImage extends Image
{
    public function parseFile(string $filename): void
    {
        $matrix = new Matrix();
        $this->os->doPaint($matrix);
        echo $filename . '格式为：JPG';
    }
}
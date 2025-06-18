<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Facade\Solution;

class FileReader
{
    public function readFile(string $filename): string
    {
        return $filename . '的文件内容';
    }
}
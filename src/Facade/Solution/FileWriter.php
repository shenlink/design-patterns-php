<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Facade\Solution;

class FileWriter
{
    public function write(string $fileName, string $content): void
    {
        echo '写入' . $content . '到文件：' . $fileName . PHP_EOL;
    }
}
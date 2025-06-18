<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Composite\Solution;

use Exception;

class ImageFile implements File
{
    private string $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function add(File $file): void
    {
        throw new Exception('不支持该方法');
    }

    public function remove(File $file): void
    {
        throw new Exception('不支持该方法');
    }

    public function getChild(int $index): File
    {
        throw new Exception('不支持该方法');
    }

    public function killVirus(): void
    {
        echo "Kill virus for file: " . $this->filename . PHP_EOL;
    }
}
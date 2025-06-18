<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Composite\Solution;

interface File
{
    public function add(File $file): void;

    public function remove(File $file): void;

    public function getChild(int $index): File;

    public function killVirus(): void;
}
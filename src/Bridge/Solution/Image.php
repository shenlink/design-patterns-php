<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Bridge\Solution;

abstract class Image
{
    protected IOperatingSystem $os;

    public function __construct(IOperatingSystem $os)
    {
        $this->os = $os;
    }

    public abstract function parseFile(string $filename): void;
}
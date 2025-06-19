<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Iterator\Basic;

interface Iterator
{
    public function hasNext(): bool;

    public function next(): string;
}

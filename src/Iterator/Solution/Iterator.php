<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Iterator\Solution;

interface Iterator
{
    public function next(): void;

    public function prev(): void;

    public function isFirst(): bool;

    public function isLast(): bool;

    public function getNextItem(): string;

    public function getPrevItem(): string;
}
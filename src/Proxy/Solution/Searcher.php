<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Proxy\Solution;

interface Searcher
{
    public function search(string $userId, string $keyword): string;
}
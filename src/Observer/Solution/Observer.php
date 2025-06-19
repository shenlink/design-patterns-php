<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Observer\Solution;

interface Observer
{
    public function getName(): string;

    public function setName(): void;

    public function help(): void;

    public function beAttacked(AllyControlCenter $acc): void;
}

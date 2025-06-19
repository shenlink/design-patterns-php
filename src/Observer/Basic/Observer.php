<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Observer\Basic;

interface Observer
{
    public function update(): void;
}
<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Strategy\Basic;

interface Strategy
{
    public function algorithm(): void;
}
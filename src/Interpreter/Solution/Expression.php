<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Interpreter\Solution;

interface Expression
{
    public function interpret(): string;
}
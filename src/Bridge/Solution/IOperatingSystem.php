<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Bridge\Solution;

interface IOperatingSystem
{
    public function doPaint(Matrix $matrix): void;
}
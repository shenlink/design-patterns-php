<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Mediator\Solution;

interface Mediator
{
    public function componentChanged(Component $component): void;
}
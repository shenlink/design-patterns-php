<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Visitor\Basic;

interface Element
{
    public function accept(Visitor $visitor): void;
}
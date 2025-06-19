<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Visitor\Basic;

class ConcreteElementA implements Element
{
    public function accept(Visitor $visitor): void
    {
        $visitor->visitA($this);
    }
}
<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Visitor\Basic;

interface Visitor
{
    public function visitA(ConcreteElementA $element): void;

    public function visitB(ConcreteElementB $element): void;
}

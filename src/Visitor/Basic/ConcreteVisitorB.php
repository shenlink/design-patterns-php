<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Visitor\Basic;


class ConcreteVisitorB implements Visitor
{
    public function visitA(ConcreteElementA $element): void
    {
        echo 'ConcreteVisitorB visitA' . PHP_EOL;
    }

    public function visitB(ConcreteElementB $element): void
    {
        echo 'ConcreteVisitorB visitB' . PHP_EOL;
    }
}
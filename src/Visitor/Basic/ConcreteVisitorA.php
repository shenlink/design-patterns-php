<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Visitor\Basic;


class ConcreteVisitorA implements Visitor
{
    public function visitA(ConcreteElementA $element): void
    {
        echo 'ConcreteVisitorA visitA' . PHP_EOL;
    }

    public function visitB(ConcreteElementB $element): void
    {
        echo 'ConcreteVisitorA visitB' . PHP_EOL;
    }
}
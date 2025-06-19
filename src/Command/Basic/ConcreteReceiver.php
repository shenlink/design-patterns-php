<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Basic;

class ConcreteReceiver implements IReceiver
{
    public function action(): void
    {
        echo 'ConcreteReceiver action' . PHP_EOL;
    }
}

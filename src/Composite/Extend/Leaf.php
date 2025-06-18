<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Composite\Extend;

class Leaf extends Component
{
    public function operation(): void
    {
        echo 'Leaf operation' . PHP_EOL;
    }
}
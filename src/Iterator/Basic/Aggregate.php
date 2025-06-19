<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Iterator\Basic;

use Countable;

interface Aggregate extends Countable
{
    public function createIterator(): Iterator;
} 
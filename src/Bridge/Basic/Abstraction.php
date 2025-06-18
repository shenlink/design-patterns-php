<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Bridge\Basic;

abstract class Abstraction
{
    abstract public function operation(): void;
}
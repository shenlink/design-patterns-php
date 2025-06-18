<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Bridge\Basic;

interface Implementor
{
    public function operationImpl(): void;
}
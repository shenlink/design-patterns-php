<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Extend;

interface IReceiver
{
    public function action(): void;
}
<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Macro;

interface IReceiver
{
    public function action(): void;
}
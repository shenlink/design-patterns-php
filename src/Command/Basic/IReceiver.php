<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Basic;

interface IReceiver
{
    public function action(): void;
}
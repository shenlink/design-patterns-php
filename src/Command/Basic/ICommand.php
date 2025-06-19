<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Basic;

interface ICommand
{
    public function execute(): void;
}
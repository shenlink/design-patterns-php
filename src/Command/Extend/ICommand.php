<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Extend;

interface ICommand
{
    public function execute(): void;
}
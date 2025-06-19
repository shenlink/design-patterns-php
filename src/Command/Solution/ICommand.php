<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Solution;

interface ICommand
{
    public function execute(): void;
}
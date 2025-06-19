<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Calculator;

interface ICommand
{
    public function execute(int $value): int;

    public function undo(): int;
}

<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\CalculatorPro;

interface ICommand
{
    public function execute(int $value): int;

    public function undo(int $value): int;

    public function redo(int $value): int;
}

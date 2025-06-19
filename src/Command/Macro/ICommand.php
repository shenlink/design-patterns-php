<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Macro;

interface ICommand
{
    public function add(ICommand $command);

    public function remove(ICommand $command): void;

    public function getCommand(int $index): ICommand;

    public function execute(): void;
}
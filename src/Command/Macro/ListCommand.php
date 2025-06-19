<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Macro;

class ListCommand implements ICommand
{
    /** @var ICommand[] */
    private array $commands;

    public function add(ICommand $command)
    {
        $this->commands[] = $command;
    }

    public function remove(ICommand $command): void
    {
        foreach ($this->commands as $key => $value) {
            if ($value === $command) {
                unset($this->commands[$key]);
            }
        }
    }

    public function getCommand(int $index): ICommand
    {
        return $this->commands[$index];
    }

    public function execute(): void
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }
}
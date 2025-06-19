<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Solution;

class MinimizeCommand implements ICommand
{
    private WindowHandler $windowHandler;

    public function __construct()
    {
        $this->windowHandler = new WindowHandler();
    }

    public function execute(): void
    {
        $this->windowHandler->minimize();
    }
}

<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Solution;

class HelpCommand implements ICommand
{
    private HelpHandler $helpHandler;

    public function __construct()
    {
        $this->helpHandler = new HelpHandler();
    }

    public function execute(): void
    {
        $this->helpHandler->display();
    }
}
<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Solution;

// 请求发送者
class FunctionButton
{
    private ICommand $command;
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setCommand(ICommand $command): void
    {
        $this->command = $command;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function onClick(): void
    {
        echo '点击功能键';
        $this->command->execute();
    }
}
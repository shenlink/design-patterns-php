<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Interpreter\Solution;

class ActionExpression implements Expression
{
    private string $action;

    public function __construct(string $action)
    {
        $this->action = $action;
    }

    public function interpret(): string
    {
        if ($this->action === 'move') {
            return '移动';
        } elseif ($this->action === 'run') {
            return '快速移动';
        } else {
            return '无效指令';
        }
    }
}

<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Interpreter\Basic;

class Add implements Expression
{
    private Expression $left;
    private Expression $right;

    public function __construct(Expression $left, Expression $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    public function interpret(Context $context): int
    {
        return $this->left->interpret($context) + $this->right->interpret($context);
    }
}
<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Interpreter\Solution;

class AndExpression implements Expression
{
    private Expression $left;
    private Expression $right;

    public function __construct(Expression $left, Expression $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    public function interpret(): string
    {
        return $this->left->interpret() . '再' . $this->right->interpret();
    }
}
<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Interpreter\Basic;

class Number implements Expression
{
    private string $key;

    public function __construct(string $key)
    {
        $this->key = $key;
    }

    public function interpret(Context $context): int
    {
        return $context->get($this->key);
    }
}

<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Interpreter\Basic;

class Context
{
    private array $variables = [];

    public function set(string $name, int $value): void
    {
        $this->variables[$name] = $value;
    }

    public function get(string $name): int
    {
        return $this->variables[$name] ?? 0;
    }
}
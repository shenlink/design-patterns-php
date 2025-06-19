<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\State\Basic;

class Context
{
    private State $state;

    public function __construct(State $state)
    {
        $this->state = $state;
    }

    public function setState(State $state): void
    {
        $this->state = $state;
    }

    public function request(): void
    {
        $this->state->handle($this);
    }
}
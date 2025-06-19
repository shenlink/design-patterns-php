<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\TemplateMethod\Extend;

abstract class AbstractClass
{
    protected bool $isStep1Executed = false;

    public final function templateMethod(): void
    {
        if ($this->isStep1Executed) {
            $this->step1();
        }
        $this->step2();
        $this->step3();
    }

    public abstract function step1(): void;

    public abstract function step2(): void;

    public abstract function step3(): void;
}

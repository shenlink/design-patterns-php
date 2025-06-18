<?php

declare (strict_types=1);

namespace Shenlink\DesignPattern\Adapter\Basic;

// 适配者类
class Adapter implements ITarget
{
    private Adaptee $adaptee;

    public function __construct()
    {
        $this->adaptee = new Adaptee();
    }

    public function request(): void
    {
        $this->adaptee->specificRequest();
    }
}
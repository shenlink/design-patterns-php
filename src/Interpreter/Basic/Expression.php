<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Interpreter\Basic;

interface Expression
{
    public function interpret(Context $context);
}
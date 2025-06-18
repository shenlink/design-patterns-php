<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Proxy\Basic;

class RealSubject implements Subject
{
    public function request(): void
    {
        echo 'RealSubject request' . PHP_EOL;
    }
}

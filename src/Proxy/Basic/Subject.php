<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Proxy\Basic;

interface Subject
{
    public function request(): void;
}
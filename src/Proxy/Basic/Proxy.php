<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Proxy\Basic;

class Proxy implements Subject
{
    private Subject $realSubject;

    public function __construct()
    {
        $this->realSubject = new RealSubject();
    }

    public function request(): void
    {
        $this->preRequest();
        $this->realSubject->request();
        $this->postRequest();
    }

    private function preRequest(): void
    {
        echo 'Proxy preRequest' . PHP_EOL;
    }

    private function postRequest(): void
    {
        echo 'Proxy postRequest' . PHP_EOL;
    }
}

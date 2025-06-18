<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Facade\Basic;

class Facade
{
    private SubSystemA $subSystemA;
    private SubSystemB $subSystemB;
    private SubSystemC $subSystemC;

    public function __construct()
    {
        $this->subSystemA = new SubSystemA();
        $this->subSystemB = new SubSystemB();
        $this->subSystemC = new SubSystemC();
    }

    public function operation(): void
    {
        $this->subSystemA->operationA();
        $this->subSystemB->operationB();
        $this->subSystemC->operationC();
    }
}

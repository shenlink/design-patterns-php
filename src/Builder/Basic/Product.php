<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Builder\Basic;

// 产品类
class Product
{
    private string $partA;
    private string $partB;
    private string $partC;

    public function setPartA(string $partA): void
    {
        $this->partA = $partA;
    }

    public function setPartB(string $partB): void
    {
        $this->partB = $partB;
    }

    public function setPartC(string $partC): void
    {
        $this->partC = $partC;
    }

    public function show(): void
    {
        echo "Product Parts: {$this->partA}, {$this->partB}, {$this->partC}";
    }
}

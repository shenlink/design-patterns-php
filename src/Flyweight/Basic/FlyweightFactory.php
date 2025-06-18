<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Flyweight\Basic;

class FlyweightFactory
{
    private array $flyweights = [];

    public function getFlyweight(string $key): Flyweight
    {
        if (!isset($this->flyweights[$key])) {
            $this->flyweights[$key] = new Flyweight('内部状态');
        }
        return $this->flyweights[$key];
    }
}
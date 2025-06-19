<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Observer\Basic;

class ConcreteObserver implements Observer
{
    public function update(): void
    {
        echo 'ConcreteObserver update';
    }
}
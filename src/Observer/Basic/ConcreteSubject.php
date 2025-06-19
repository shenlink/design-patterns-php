<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Observer\Basic;

class ConcreteSubject extends Subject
{
    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}
<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Observer\Basic;

abstract class Subject
{
    /**
     * @var Observer[]
     */
    protected array $observers = [];

    public function attach(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer): void
    {
        foreach ($this->observers as $key => $value) {
            if ($value === $observer) {
                unset($this->observers[$key]);
            }
        }
    }

    public abstract function notify(): void;
}
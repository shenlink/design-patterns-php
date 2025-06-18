<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Composite\Basic;

class Composite implements Component
{
    private array $components;


    public function add(Component $component): void
    {
        $this->components[] = $component;
    }

    public function remove(Component $component): void
    {
        foreach ($this->components as $key => $value) {
            if ($value === $component) {
                unset($this->components[$key]);
            }
        }
    }

    public function getChild(int $index): Component
    {
        return $this->components[$index];
    }

    public function operation(): void
    {
        foreach ($this->components as $component) {
            $component->operation();
        }
    }
}
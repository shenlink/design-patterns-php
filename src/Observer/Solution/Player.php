<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Observer\Solution;

class Player implements Observer
{
    private string $name;
    private string $help = '';

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(): void
    {
        $this->name = $this->name;
    }

    public function help(): void
    {
        echo '坚持住，' . $this->name . '来救你了' . PHP_EOL;
    }

    public function beAttacked(AllyControlCenter $acc): void
    {
        $acc->notify($this->name);
    }
}
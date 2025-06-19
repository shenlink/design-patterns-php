<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Observer\Solution;

class ConcreteAllyControlCenter extends AllyControlCenter
{
    public function __construct(string $allyName)
    {
        $this->allyName = $allyName;
    }

    public function notify(string $name): void
    {
        foreach ($this->players as $player) {
            if ($player->getName() !== $name) {
                $player->help();
            }
        }
    }
}
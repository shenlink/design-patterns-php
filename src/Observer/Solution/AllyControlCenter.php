<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Observer\Solution;

abstract class AllyControlCenter
{
    protected string $allyName;
    /**
     * @var Observer[]
     */
    protected array $players = [];

    public function getAllyName(): string
    {
        return $this->allyName;
    }

    public function setAllyName(string $allyName): void
    {
        $this->allyName = $allyName;
    }

    public function join(Observer $player): void
    {
        $this->players[] = $player;
    }

    public function quit(Observer $player): void
    {
        $index = array_search($player, $this->players, true);
        if ($index !== false) {
            unset($this->players[$index]);
        }
    }

    public abstract function notify(string $message): void;
}

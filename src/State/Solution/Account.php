<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\State\Solution;

class Account
{
    private AccountState $state;
    private string $owner;
    private float $balance = 0.0;

    public function __construct(string $owner, float $balance)
    {
        $this->owner = $owner;
        $this->balance = $balance;
        $this->state = new NormalState($balance);
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function setBalance(float $balance): void
    {
        $this->balance = $balance;
    }

    public function getState(): AccountState
    {
        return $this->state;
    }

    public function setState(AccountState $state): void
    {
        $this->state = $state;
    }

    public function deposit(float $amount): void
    {
        $this->state->deposit($this, $amount);
    }

    public function withdraw(float $amount): void
    {
        $this->state->withdraw($this, $amount);
    }

    public function computeInterest(): void
    {
        $this->state->computeInterest($this);
    }
}
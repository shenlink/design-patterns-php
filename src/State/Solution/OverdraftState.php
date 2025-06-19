<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\State\Solution;

class OverdraftState extends AccountState
{
    public function deposit(Account $account, float $amount): void
    {
        $account->setBalance($account->getBalance() + $amount);
        $this->stateCheck($account);
    }

    public function withdraw(Account $account, float $amount): void
    {
        $account->setBalance($account->getBalance() - $amount);
        $this->stateCheck($account);
    }

    public function computeInterest(Account $account): void
    {
        $account->setBalance($account->getBalance() - $account->getBalance() * 2 / 100);
    }
}

<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\State\Solution;


abstract class AccountState
{
    public abstract function deposit(Account $account, float $amount): void;

    public abstract function withdraw(Account $account, float $amount): void;

    public abstract function computeInterest(Account $account): void;

    public function stateCheck(Account $account): void
    {
        if ($account->getBalance() >= 0) {
            $account->setState(new NormalState());
        } else if ($account->getBalance() < 0 && $account->getBalance() > -2000) {
            $account->setState(new OverdraftState());
        } else if ($account->getBalance() <= -2000.0) {
            $account->setState(new RestrictedState());
        }
    }
}

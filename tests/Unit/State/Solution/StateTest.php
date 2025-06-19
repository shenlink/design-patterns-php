<?php

declare(strict_types=1);

namespace Tests\Unit\State\Solution;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\State\Solution\Account;
use Shenlink\DesignPattern\State\Solution\NormalState;
use Shenlink\DesignPattern\State\Solution\OverdraftState;
use Shenlink\DesignPattern\State\Solution\RestrictedState;

// 状态模式
class StateTest extends TestCase
{
    public function testState()
    {
        $account = new Account('shenlink', 1000);
        $this->assertInstanceOf(NormalState::class, $account->getState());
        $this->assertEquals(1000, $account->getBalance());
        $account->withdraw(500);
        $this->assertEquals(500, $account->getBalance());
        $account->computeInterest();
        $this->assertEquals(510, $account->getBalance());
        $account->withdraw(500);
        $this->assertEquals(10, $account->getBalance());
        $account->withdraw(100);
        $this->assertEquals(-90, $account->getBalance());
        $this->assertInstanceOf(OverdraftState::class, $account->getState());
        $account->withdraw(2000);
        $this->assertEquals(-2090, $account->getBalance());
        $this->assertInstanceOf(RestrictedState::class, $account->getState());
    }
}
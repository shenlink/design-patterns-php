<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\TemplateMethod\Solution;

abstract class Account
{
    public function validate(string $username, string $password): bool
    {
        return $username === 'shenlink' && $password === '123456';
    }

    public abstract function calculateInterest(): void;

    public function handle(string $username, string $password): void
    {
        if (!$this->validate($username, $password)) {
            echo '用户名或密码错误' . PHP_EOL;
            return;
        }
        $this->calculateInterest();
    }
}

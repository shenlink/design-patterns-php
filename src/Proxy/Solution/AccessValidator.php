<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Proxy\Solution;

class AccessValidator
{
    public function validate(string $userId): bool
    {
        return $userId === 'admin';
    }
}
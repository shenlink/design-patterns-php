<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Facade\Solution;

class CipherMachine
{
    public function encrypt(string $plainText): string
    {
        return '加密后的文本：' . $plainText;
    }
}

<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\FactoryMethod\Solution;

// 日志接口
interface ILogger
{
    // 写入日志
    public function writeLog(string $message): void;
}
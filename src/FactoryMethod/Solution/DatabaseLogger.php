<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\FactoryMethod\Solution;

// 数据库日志类
class DatabaseLogger implements ILogger
{
    /**
     * 写入日志
     * @param string $message 日志消息
     * @return void
     */
    public function writeLog(string $message): void
    {
        echo "DatabaseLogger: $message";
    }
}

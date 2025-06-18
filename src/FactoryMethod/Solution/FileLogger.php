<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\FactoryMethod\Solution;

// 文件日志类
class FileLogger implements ILogger
{
    /**
     * 写入日志
     * @param string $message 日志消息
     * @return void
     */
    public function writeLog(string $message): void
    {
        echo "FileLogger: $message";
    }
}
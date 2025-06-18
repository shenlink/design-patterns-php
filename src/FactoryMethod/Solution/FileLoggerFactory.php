<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\FactoryMethod\Solution;

// 文件日志工厂类
class FileLoggerFactory implements ILoggerFactory
{
    /**
     * 创建文件日志类实例
     * @return FileLogger 文件日志类实例
     */
    public function createLogger(): ILogger
    {
        return new FileLogger();
    }
}
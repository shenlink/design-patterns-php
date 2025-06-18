<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\FactoryMethod\Solution;

// 数据库日志记录器工厂类
class DatabaseLoggerFactory implements ILoggerFactory
{
    /**
     * 创建数据库日志记录器
     * @return ILogger 数据库日志记录器实例
     */
    public function createLogger(): ILogger
    {
        return new DatabaseLogger();
    }
}

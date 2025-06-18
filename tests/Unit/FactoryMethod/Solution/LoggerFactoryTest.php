<?php

declare(strict_types=1);

namespace Tests\Unit\FactoryMethod\Solution;

use Shenlink\DesignPattern\FactoryMethod\Solution\DatabaseLogger;
use Shenlink\DesignPattern\FactoryMethod\Solution\DatabaseLoggerFactory;
use Shenlink\DesignPattern\FactoryMethod\Solution\FileLogger;
use Shenlink\DesignPattern\FactoryMethod\Solution\FileLoggerFactory;
use Tests\Support\OutputCapture;
use PHPUnit\Framework\TestCase;;

// 日志工厂测试类
class LoggerFactoryTest extends TestCase
{
    public function testCreateLogger()
    {
        $factory = new DatabaseLoggerFactory();
        $logger = $factory->createLogger();
        $this->assertInstanceOf(DatabaseLogger::class, $logger);
        $output = OutputCapture::capture(fn() => $logger->writeLog('Hello World'));
        $this->assertEquals('DatabaseLogger: Hello World', $output);

        $factory = new FileLoggerFactory();
        $logger = $factory->createLogger();
        $this->assertInstanceOf(FileLogger::class, $logger);
        $output = OutputCapture::capture(fn() => $logger->writeLog('Hello World'));
        $this->assertEquals('FileLogger: Hello World', $output);
    }
}
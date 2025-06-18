<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Singleton\Basic;

use RuntimeException;

// 单例类
class Singleton
{
    // 实例
    private static $instance;

    // 禁止new初始化
    private function __construct()
    {
    }

    // 获取实例
    public static function getInstance(): self
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    // 防止克隆
    private function __clone()
    {
    }

    // 防止反序列化
    public function __wakeup()
    {
        if (self::$instance !== null) {
            throw new RuntimeException('反序列化不被允许');
        }

        self::$instance = $this;
    }
}

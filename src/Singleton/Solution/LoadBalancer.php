<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Singleton\Solution;

use RuntimeException;

// 负载均衡器
class LoadBalancer
{
    // 实例
    private static $instance;

    // 服务器列表
    private array $serverList = [];

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

    // 添加服务器
    public function addServer(string $server): void
    {
        $this->serverList[] = $server;
    }

    // 获取服务器
    public function getServer(): string
    {
        return $this->serverList[rand(0, count($this->serverList) - 1)];
    }

    // 删除服务器
    public function removeServer(string $server): void
    {
        foreach ($this->serverList as $key => $value) {
            if ($value === $server) {
                unset($this->serverList[$key]);
                break;
            }
        }
    }

    // 清空服务器
    public function clearServerList(): void
    {
        $this->serverList = [];
    }

    // 获取服务器数量
    public function getServerCount(): int
    {
        return count($this->serverList);
    }

    // 禁止克隆
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

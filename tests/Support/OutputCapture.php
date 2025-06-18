<?php

declare(strict_types=1);

namespace Tests\Support;

// 输出捕获器
class OutputCapture
{
    /**
     * 捕获输出
     *
     * @param callable $callback 回调函数
     * @return string 捕获的输出
     */
    public static function capture(callable $callback)
    {
        // 启动输出缓冲
        ob_start();

        // 执行回调
        $callback();

        // 获取并返回输出
        return ob_get_clean();
    }
}
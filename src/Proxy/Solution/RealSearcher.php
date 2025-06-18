<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Proxy\Solution;

class RealSearcher implements Searcher
{
    public function search(string $userId, string $keyword): string
    {
        return '用户' . $userId . '使用关键词：' . $keyword . '查询了商务信息';
    }
}
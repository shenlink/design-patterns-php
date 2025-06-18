<?php

declare (strict_types=1);

namespace Shenlink\DesignPattern\Adapter\Solution;

// 成绩操作接口
interface ScoreOperation
{
    public function sort(array &$scores): void;

    public function search(array &$scores, int $score);
} 
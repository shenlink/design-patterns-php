<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Adapter\Solution;

// 二分搜索
class BinarySearch
{
    public function search(array &$array, int $value): int
    {
        $left = 0;
        $right = count($array) - 1;
        while ($left <= $right) {
            $mid = intval(floor($left + (($right - $left) >> 1)));
            if ($array[$mid] === $value) {
                return $mid;
            } elseif ($array[$mid] < $value) {
                $left = $mid + 1;
            } else {
                $right = $mid - 1;
            }
        }
        return -1;
    }
}
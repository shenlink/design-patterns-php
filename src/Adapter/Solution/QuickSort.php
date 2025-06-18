<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Adapter\Solution;

// 快速排序
class QuickSort
{
    public function sort(array &$array): void
    {
        $this->sortArray($array, 0, count($array) - 1);
    }

    private function sortArray(array &$array, int $left, int $right)
    {
        if ($left >= $right) {
            return;
        }
        $pivot = $this->partition($array, $left, $right);
        $this->sortArray($array, $left, $pivot - 1);
        $this->sortArray($array, $pivot + 1, $right);
    }

    private function partition(array &$array, int $left, int $right): int
    {
        $j = $left;
        for ($i = $left + 1; $i <= $right; $i++) {
            if ($array[$i] < $array[$left]) {
                $j++;
                $this->swap($array, $i, $j);
            }
        }
        $this->swap($array, $left, $j);
        return $j;
    }

    private function swap(array &$array, int $i, int $j): void
    {
        $tmp = $array[$i];
        $array[$i] = $array[$j];
        $array[$j] = $tmp;
    }
}
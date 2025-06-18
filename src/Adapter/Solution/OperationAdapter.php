<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Adapter\Solution;

// 操作适配器
class OperationAdapter implements ScoreOperation
{
    private BinarySearch $binarySearch;
    private QuickSort $quickSort;

    public function __construct()
    {
        $this->binarySearch = new BinarySearch();
        $this->quickSort = new QuickSort();
    }

    public function sort(array &$scores): void
    {
        $this->quickSort->sort($scores);
    }

    public function search(array &$scores, int $score): int
    {
        return $this->binarySearch->search($scores, $score);
    }
}

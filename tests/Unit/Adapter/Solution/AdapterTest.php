<?php

declare(strict_types=1);

namespace Tests\Unit\Adapter\Solution;

use Shenlink\DesignPattern\Adapter\Solution\OperationAdapter;
use Tests\Support\OutputCapture;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    private OperationAdapter $adapter;

    public function setUp(): void
    {
        parent::setUp();
        $this->adapter = new OperationAdapter();
    }

    public function testBinarySearchAdapter()
    {
        $array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        foreach ($array as $i) {
            $this->assertSame($i, $this->adapter->search($array, $i));
        }
    }

    public function testQuickSortAdapter()
    {
        $array = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
        $this->adapter->sort($array);
        $this->assertSame([0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10], $array);
    }
}
<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Visitor\Solution;

interface Department
{
    public function visitA(FulltimeEmployee $employee);

    public function visitB(PartTimeEmployee $employee);
}
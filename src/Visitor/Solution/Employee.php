<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Visitor\Solution;

interface Employee
{
    public function accept(Department $department);
}
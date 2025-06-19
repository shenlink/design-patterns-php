<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Visitor\Solution;

class EmployeeList
{
    /**
     * @var Employee[]
     */
    private array $employees = [];

    public function add(Employee $employee): void
    {
        $this->employees[] = $employee;
    }

    public function accept(Department $department): void
    {
        foreach ($this->employees as $employee) {
            $employee->accept($department);
        }
    }
}
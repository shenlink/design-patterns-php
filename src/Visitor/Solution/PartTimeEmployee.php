<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Visitor\Solution;

class PartTimeEmployee implements Employee
{
    private string $name;
    private float $hourWage;
    private int $workTime;

    public function __construct(string $name, float $hourWage, int $workTime)
    {
        $this->name = $name;
        $this->hourWage = $hourWage;
        $this->workTime = $workTime;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setHourWage(float $hourWage): void
    {
        $this->hourWage = $hourWage;
    }

    public function setWorkTime(int $workTime): void
    {
        $this->workTime = $workTime;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHourWage(): float
    {
        return $this->hourWage;
    }

    public function getWorkTime(): int
    {
        return $this->workTime;
    }

    public function accept(Department $department): void
    {
        $department->visitB($this);
    }
}

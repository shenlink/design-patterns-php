<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Visitor\Solution;

class FulltimeEmployee implements Employee
{
    private string $name;
    private float $weeklyWage;
    private int $workTime;

    public function __construct(string $name, float $weeklyWage, int $workTime)
    {
        $this->name = $name;
        $this->weeklyWage = $weeklyWage;
        $this->workTime = $workTime;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setWeeklyWage(float $weeklyWage): void
    {
        $this->weeklyWage = $weeklyWage;
    }

    public function setWorkTime(int $workTime): void
    {
        $this->workTime = $workTime;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getWeeklyWage(): float
    {
        return $this->weeklyWage;
    }

    public function getWorkTime(): int
    {
        return $this->workTime;
    }

    public function accept(Department $department): void
    {
        $department->visitA($this);
    }
}
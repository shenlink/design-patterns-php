<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Visitor\Solution;

class FADepartment implements Department
{
    public function visitA(FulltimeEmployee $employee): void
    {
        $workTime = $employee->getWorkTime();
        $weekWage = $employee->getWeeklyWage();

        if ($workTime > 40) {
            $weekWage += ($workTime - 40) * 100;
        } elseif ($workTime < 40) {
            $weekWage -= (40 - $workTime) * 80;
            if ($weekWage < 0) {
                $weekWage = 0;
            }
        }

        echo "正式员工" . $employee->getName() . "实际工资为：" . $weekWage . "元。" . PHP_EOL;
    }

    public function visitB(PartTimeEmployee $employee): void
    {
        $workTime = $employee->getWorkTime();
        $hourWage = $employee->getHourWage();

        echo "临时工" . $employee->getName() . "实际工资为：" . ($workTime * $hourWage) . "元。" . PHP_EOL;
    }
}

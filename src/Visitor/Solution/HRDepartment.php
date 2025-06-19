<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Visitor\Solution;

class HRDepartment implements Department
{
    public function visitA(FulltimeEmployee $employee): void
    {
        $workTime = $employee->getWorkTime();

        echo "正式员工" . $employee->getName() . "实际工作时间为：" . $workTime . "小时。" . PHP_EOL;

        if ($workTime > 40) {
            echo "正式员工" . $employee->getName() . "加班时间为：" . ($workTime - 40) . "小时。" . PHP_EOL;
        } elseif ($workTime < 40) {
            echo "正式员工" . $employee->getName() . "请假时间为：" . (40 - $workTime) . "小时。" . PHP_EOL;
        }
    }

    public function visitB(PartTimeEmployee $employee): void
    {
        $workTime = $employee->getWorkTime();

        echo "临时工" . $employee->getName() . "实际工作时间为：" . $workTime . "小时。" . PHP_EOL;
    }
}

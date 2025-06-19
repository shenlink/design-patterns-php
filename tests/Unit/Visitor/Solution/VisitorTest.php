<?php

declare(strict_types=1);

namespace Tests\Unit\Visitor\Solution;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Visitor\Solution\EmployeeList;
use Shenlink\DesignPattern\Visitor\Solution\FADepartment;
use Shenlink\DesignPattern\Visitor\Solution\FulltimeEmployee;
use Shenlink\DesignPattern\Visitor\Solution\HRDepartment;
use Shenlink\DesignPattern\Visitor\Solution\PartTimeEmployee;
use Tests\Support\OutputCapture;

// 访问者模式
class VisitorTest extends TestCase
{
    public function testVisitor()
    {
        $list = new EmployeeList();
        $employee1 = new FulltimeEmployee("张无忌", 3200.00, 45);
        $employee2 = new FulltimeEmployee("杨过", 2000.00, 40);
        $employee3 = new FulltimeEmployee("段誉", 2400.00, 38);
        $employee4 = new PartTimeEmployee("洪七公", 80.00, 20);
        $employee5 = new PartTimeEmployee("郭靖", 60.00, 18);

        $list->add($employee1);
        $list->add($employee2);
        $list->add($employee3);
        $list->add($employee4);
        $list->add($employee5);
        $output = OutputCapture::capture(fn() => $list->accept(new HRDepartment()));
        $this->assertSame('正式员工张无忌实际工作时间为：45小时。' . PHP_EOL .
            '正式员工张无忌加班时间为：5小时。' . PHP_EOL .
            '正式员工杨过实际工作时间为：40小时。' . PHP_EOL .
            '正式员工段誉实际工作时间为：38小时。' . PHP_EOL .
            '正式员工段誉请假时间为：2小时。' . PHP_EOL .
            '临时工洪七公实际工作时间为：20小时。' . PHP_EOL .
            '临时工郭靖实际工作时间为：18小时。' . PHP_EOL, $output);
        $output = OutputCapture::capture(fn() => $list->accept(new FADepartment()));
        $this->assertSame('正式员工张无忌实际工资为：3700元。' . PHP_EOL .
            '正式员工杨过实际工资为：2000元。' . PHP_EOL .
            '正式员工段誉实际工资为：2240元。' . PHP_EOL .
            '临时工洪七公实际工资为：1600元。' . PHP_EOL .
            '临时工郭靖实际工资为：1080元。' . PHP_EOL, $output);
    }
}

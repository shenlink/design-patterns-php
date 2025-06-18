<?php

declare(strict_types=1);

namespace Tests\Unit\Prototype\Solution;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Prototype\Solution\Attachment;
use Shenlink\DesignPattern\Prototype\Solution\WeeklyLog;
use Tests\Support\OutputCapture;

// 原型测试
class WeeklyLogTest extends TestCase
{
    // 测试克隆
    public function testClone()
    {
        $attachment = new Attachment('附件1', '描述1');
        $weeklyLog = new WeeklyLog('张三', '2021-01-01', '内容1', $attachment);

        $newWeekLog = clone $weeklyLog;
        $this->assertSame('张三', $newWeekLog->getName());
        $this->assertSame('2021-01-01', $newWeekLog->getDate());
        $this->assertSame('内容1', $newWeekLog->getContent());
        $this->assertSame('附件1', $newWeekLog->getAttachment()->getName());
        $this->assertSame('描述1', $newWeekLog->getAttachment()->getDescription());
        $output = OutputCapture::capture(fn() => $newWeekLog->getAttachment()->download());
        $this->assertSame("下载附件：附件1，描述：描述1", $output);
    }
}
<?php

declare(strict_types=1);

namespace Tests\Unit\TemplateMethod\Solution;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\TemplateMethod\Solution\CurrentAccount;
use Shenlink\DesignPattern\TemplateMethod\Solution\SavingAccount;
use Tests\Support\OutputCapture;

// 模板方法测试
class TemplateTest extends TestCase
{
    public function testTemplate()
    {
        $account = new CurrentAccount();
        $output = OutputCapture::capture(fn() => $account->handle('test', '123456'));
        $this->assertSame('用户名或密码错误' . PHP_EOL, $output);
        $output = OutputCapture::capture(fn() => $account->handle('shenlink', '123456'));
        $this->assertSame('计算活期利息' . PHP_EOL, $output);

        $account = new SavingAccount();
        $output = OutputCapture::capture(fn() => $account->handle('test', '123456'));
        $this->assertSame('用户名或密码错误' . PHP_EOL, $output);
        $output = OutputCapture::capture(fn() => $account->handle('shenlink', '123456'));
        $this->assertSame('计算定期利息' . PHP_EOL, $output);
    }
}

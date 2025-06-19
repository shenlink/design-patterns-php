<?php

declare(strict_types=1);

namespace Tests\Unit\ChainOfResponsibilities\Solution;

use Shenlink\DesignPattern\ChainOfResponsibilities\Solution\Director;
use Shenlink\DesignPattern\ChainOfResponsibilities\Solution\VicePresident;
use Shenlink\DesignPattern\ChainOfResponsibilities\Solution\President;
use Shenlink\DesignPattern\ChainOfResponsibilities\Solution\Congress;
use Shenlink\DesignPattern\ChainOfResponsibilities\Solution\PurchaseRequest;
use PHPUnit\Framework\TestCase;
use Tests\Support\OutputCapture;

// 职责链测试
class ApproverTest extends TestCase
{
    public function testDirectorApprovesSmallRequest()
    {
        // 创建审批链
        $director = new Director("张主任");
        $vicePresident = new VicePresident("李副董");
        $president = new President("王董事长");
        $congress = new Congress("董事会");

        $director->setSuccessor($vicePresident);
        $vicePresident->setSuccessor($president);
        $president->setSuccessor($congress);

        $request = new PurchaseRequest(3000.0, 1001, "办公用品采购");
        $output = OutputCapture::capture(fn() => $director->approve($request));
        $this->assertSame('主任张主任审批采购单：' . $request->getNumber() . '，金额：' . $request->getAmount() . '元，采购目的：' . $request->getPurpose() . '。' . PHP_EOL, $output);
    }

    public function testVicePresidentApprovesRequest()
    {
        $director = new Director("张主任");
        $vicePresident = new VicePresident("李副董");
        $president = new President("王董事长");
        $congress = new Congress("董事会");

        $director->setSuccessor($vicePresident);
        $vicePresident->setSuccessor($president);
        $president->setSuccessor($congress);

        $request = new PurchaseRequest(7000.0, 1002, "服务器采购");
        $output = OutputCapture::capture(fn() => $director->approve($request));
        $this->assertSame('副董事长李副董审批采购单：' . $request->getNumber() . '，金额：' . $request->getAmount() . '元，采购目的：' . $request->getPurpose() . '。' . PHP_EOL, $output);
    }

    public function testPresidentApprovesRequest()
    {
        $director = new Director("张主任");
        $vicePresident = new VicePresident("李副董");
        $president = new President("王董事长");
        $congress = new Congress("董事会");

        $director->setSuccessor($vicePresident);
        $vicePresident->setSuccessor($president);
        $president->setSuccessor($congress);

        $request = new PurchaseRequest(300000.0, 1003, "公司扩建");

        $output = OutputCapture::capture(fn() => $director->approve($request));
        $this->assertSame('董事长王董事长审批采购单：' . $request->getNumber() . '，金额：' . $request->getAmount() . '元，采购目的：' . $request->getPurpose() . '。' . PHP_EOL, $output);
    }

    public function testCongressApprovesLargeRequest()
    {
        $director = new Director("张主任");
        $vicePresident = new VicePresident("李副董");
        $president = new President("王董事长");
        $congress = new Congress("董事会");

        $director->setSuccessor($vicePresident);
        $vicePresident->setSuccessor($president);
        $president->setSuccessor($congress);

        $request = new PurchaseRequest(1_000_000.0, 1004, "大型并购");

        $output = OutputCapture::capture(fn() => $director->approve($request));
        $this->assertSame('董事会审批采购单：' . $request->getNumber() . '，金额：' . $request->getAmount() . '元，采购目的：' . $request->getPurpose() . '。' . PHP_EOL, $output);
    }

    public function testRequestFallsThroughTheChain()
    {
        $director = new Director("张主任");
        $vicePresident = new VicePresident("李副董");
        $president = new President("王董事长");
        $congress = new Congress("董事会");

        $director->setSuccessor($vicePresident);
        $vicePresident->setSuccessor($president);
        $president->setSuccessor($congress);

        // 请求金额刚好在 director 不处理范围内
        $request = new PurchaseRequest(6000.0, 1005, "测试链式传递");
        $output = OutputCapture::capture(fn() => $director->approve($request));
        $this->assertStringNotContainsString('主任张主任审批采购单', $output);
        $this->assertStringContainsString('副董事长李副董审批采购单', $output);
    }
}

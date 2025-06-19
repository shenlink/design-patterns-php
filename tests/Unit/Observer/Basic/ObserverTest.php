<?php

declare(strict_types=1);

namespace Tests\Unit\Observer\Basic;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Observer\Basic\ConcreteObserver;
use Shenlink\DesignPattern\Observer\Basic\ConcreteSubject;
use Tests\Support\OutputCapture;

// 观察者测试
class ObserverTest extends TestCase
{
    public function testObserver(): void
    {
        $subject = new ConcreteSubject();
        $subject->attach(new ConcreteObserver());
        $output = OutputCapture::capture(fn() => $subject->notify());
        $this->assertSame('ConcreteObserver update', $output);
    }
}
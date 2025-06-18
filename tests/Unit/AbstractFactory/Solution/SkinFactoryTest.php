<?php

declare(strict_types=1);

namespace Tests\Unit\AbstractFactory\Solution;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\AbstractFactory\Solution\SpringButton;
use Shenlink\DesignPattern\AbstractFactory\Solution\SpringComboBox;
use Shenlink\DesignPattern\AbstractFactory\Solution\SpringSkinFactory;
use Shenlink\DesignPattern\AbstractFactory\Solution\SpringTextField;
use Shenlink\DesignPattern\AbstractFactory\Solution\SummerButton;
use Shenlink\DesignPattern\AbstractFactory\Solution\SummerComboBox;
use Shenlink\DesignPattern\AbstractFactory\Solution\SummerSkinFactory;
use Shenlink\DesignPattern\AbstractFactory\Solution\SummerTextField;
use Tests\Support\OutputCapture;

// 皮肤工厂测试类
class SkinFactoryTest extends TestCase
{
    // 测试浅绿色皮肤工厂
    public function testSpringSkinFactory(): void
    {
        $factory = new SpringSkinFactory();

        $button = $factory->createButton();
        $this->assertInstanceOf(SpringButton::class, $button);
        $output = OutputCapture::capture(fn() => $button->display());
        $this->assertSame('Spring Button', $output);

        $textField = $factory->createTextField();
        $this->assertInstanceOf(SpringTextField::class, $textField);
        $output = OutputCapture::capture(fn() => $textField->display());
        $this->assertSame('Spring TextField', $output);

        $comboBox = $factory->createComboBox();
        $this->assertInstanceOf(SpringComboBox::class, $comboBox);
        $output = OutputCapture::capture(fn() => $comboBox->display());
        $this->assertSame('Spring ComboBox', $output);
    }

    // 测试浅蓝色皮肤工厂
    public function testSummerSkinFactory(): void
    {
        $factory = new SummerSkinFactory();

        $button = $factory->createButton();
        $this->assertInstanceOf(SummerButton::class, $button);
        $output = OutputCapture::capture(fn() => $button->display());
        $this->assertSame('Summer Button', $output);

        $textField = $factory->createTextField();
        $this->assertInstanceOf(SummerTextField::class, $textField);
        $output = OutputCapture::capture(fn() => $textField->display());
        $this->assertSame('Summer TextField', $output);

        $comboBox = $factory->createComboBox();
        $this->assertInstanceOf(SummerComboBox::class, $comboBox);
        $output = OutputCapture::capture(fn() => $comboBox->display());
        $this->assertSame('Summer ComboBox', $output);
    }
}

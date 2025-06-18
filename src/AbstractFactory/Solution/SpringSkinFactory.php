<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\AbstractFactory\Solution;

// 浅绿色皮肤工厂
class SpringSkinFactory implements ISkinFactory
{
    // 创建浅绿色按钮
    public function createButton(): IButton
    {
        return new SpringButton();
    }

    // 创建浅绿色边框的组合框
    public function createComboBox(): IComboBox
    {
        return new SpringComboBox();
    }

    // 创建浅绿色边框的文本框
    public function createTextField(): ITextField
    {
        return new SpringTextField();
    }
}

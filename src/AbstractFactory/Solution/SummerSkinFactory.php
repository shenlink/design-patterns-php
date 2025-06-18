<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\AbstractFactory\Solution;

// 浅蓝色皮肤工厂
class SummerSkinFactory implements ISkinFactory
{
    // 创建浅蓝色按钮
    public function createButton(): IButton
    {
        return new SummerButton();
    }

    // 创建浅蓝色边框的文本框
    public function createTextField(): ITextField
    {
        return new SummerTextField();
    }

    // 创建浅蓝色边框的组合框
    public function createComboBox(): IComboBox
    {
        return new SummerComboBox();
    }
}
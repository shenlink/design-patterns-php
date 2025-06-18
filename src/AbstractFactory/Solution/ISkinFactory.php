<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\AbstractFactory\Solution;

// 皮肤工厂接口
interface ISkinFactory
{
    // 创建按钮
    public function createButton(): IButton;

    // 创建文本框
    public function createTextField(): ITextField;

    // 创建组合框
    public function createComboBox(): IComboBox;
}
<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Mediator\Solution;

class ConcreteMediator implements Mediator
{
    // 注意：这里不是Component类，而是一个具体的类，不符合松耦合的原则，
    // 这是设计模式对设计原则的取舍
    private Button $button;
    private ListBox $list;
    private TextBox $textBox;
    private ComboBox $comboBox;

    public function setButton(Button $button): void
    {
        $this->button = $button;
    }

    public function setList(ListBox $list): void
    {
        $this->list = $list;
    }

    public function setTextBox(TextBox $textBox): void
    {
        $this->textBox = $textBox;
    }

    public function setComboBox(ComboBox $comboBox): void
    {
        $this->comboBox = $comboBox;
    }

    // 封装同事对象之间的交互
    public function componentChanged(Component $component): void
    {
        // 单击按钮
        if ($component === $this->button) {
            $this->list->update();
            $this->comboBox->update();
            $this->textBox->update();
        } // 从列表框选择客户
        elseif ($component === $this->list) {
            $this->comboBox->select();
            $this->textBox->setText();
        } // 从组合框选择客户
        elseif ($component === $this->comboBox) {
            $this->comboBox->select();
            $this->textBox->setText();
        }
    }
}

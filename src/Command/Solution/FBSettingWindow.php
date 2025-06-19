<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Command\Solution;

class FBSettingWindow
{
    private string $title;
    private array $functionButtons;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function addFunctionButton(FunctionButton $functionButton)
    {
        $this->functionButtons[] = $functionButton;
    }

    public function removeFunctionButton(FunctionButton $functionButton)
    {
        foreach ($this->functionButtons as $key => $button) {
            if ($button->getName() === $functionButton->getName()) {
                unset($this->functionButtons[$key]);
            }
        }
    }

    public function display(): void
    {
        echo '显示窗口：' . $this->title . PHP_EOL;
        echo '显示功能键：' . PHP_EOL;
        foreach ($this->functionButtons as $button) {
            echo '功能键：' . $button->getName() . PHP_EOL;
        }
        echo '-----------------------------------------';
    }
}
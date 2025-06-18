<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Decorator\Solution;

class ScrollBar extends Decorator
{
    public function __construct(Component $component)
    {
        parent::__construct($component);
    }

    public function display(): void
    {
        parent::display();
        $this->setScrollBar();
    }

    public function setScrollBar(): void
    {
        echo '为构件增加滚动条' . PHP_EOL;
    }
}
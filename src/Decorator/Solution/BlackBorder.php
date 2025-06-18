<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Decorator\Solution;

class BlackBorder extends Decorator
{
    public function __construct(Component $component)
    {
        parent::__construct($component);
    }

    public function display(): void
    {
        parent::display();
        $this->setBlackBorder();
    }

    private function setBlackBorder()
    {
        echo '为构件增加黑色边框' . PHP_EOL;
    }
}
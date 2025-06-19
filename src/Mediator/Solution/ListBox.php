<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Mediator\Solution;

class ListBox extends Component
{
    public function __construct(Mediator $mediator)
    {
        parent::__construct($mediator);
    }

    public function update(): void
    {
        echo '列表框增加一项：张无忌。' . PHP_EOL;
    }

    public function select(): void
    {
        echo '列表框选中项：小龙女。';
    }
}

<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Mediator\Solution;

class TextBox extends Component
{
    public function __construct(Mediator $mediator)
    {
        parent::__construct($mediator);
    }

    public function update(): void
    {
        echo '客户信息增加成功后文本框清空。' . PHP_EOL;
    }

    public function setText(): void
    {
        echo '文本框显示：小龙女。' . PHP_EOL;
    }
}

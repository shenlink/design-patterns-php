<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Mediator\Solution;

class Button extends Component
{
    public function __construct(Mediator $mediator)
    {
        parent::__construct($mediator);
    }

    public function update(): void
    {
    }
}

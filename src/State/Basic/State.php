<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\State\Basic;

interface State
{
    public function handle(Context $context);
}
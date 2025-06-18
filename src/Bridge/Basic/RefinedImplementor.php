<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Bridge\Basic;

class RefinedImplementor implements Implementor
{
    public function operationImpl(): void
    {
        echo '实现器实现类';
    }
}
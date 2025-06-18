<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\FactoryMethod\Solution;

interface ILoggerFactory
{
    public function createLogger(): ILogger;
}
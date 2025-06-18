<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Builder\Solution;

abstract class ActorBuilder
{
    protected Actor $actor;

    public abstract function buildType(): void;

    public abstract function buildSex(): void;

    public abstract function buildFace(): void;

    public abstract function buildCostume(): void;

    public abstract function buildHairstyle(): void;

    public function getActor(): Actor
    {
        return $this->actor;
    }
}
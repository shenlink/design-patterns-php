<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Builder\Extend;

abstract class ActorBuilder
{
    protected Actor $actor;

    public abstract function buildType(): ActorBuilder;

    public abstract function buildSex(): ActorBuilder;

    public abstract function buildFace(): ActorBuilder;

    public abstract function buildCostume(): ActorBuilder;

    public abstract function buildHairstyle(): ActorBuilder;

    public function getActor(): Actor
    {
        return $this->actor;
    }
}
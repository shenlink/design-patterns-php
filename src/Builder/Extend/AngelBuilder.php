<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Builder\Extend;

class AngelBuilder extends ActorBuilder
{
    public function __construct()
    {
        $this->actor = new Actor();
    }

    public function buildType(): ActorBuilder
    {
        $this->actor->setType('天使');
        return $this;
    }

    public function buildSex(): ActorBuilder
    {
        $this->actor->setSex('女');
        return $this;
    }

    public function buildFace(): ActorBuilder
    {
        $this->actor->setFace('漂亮');
        return $this;
    }

    public function buildCostume(): ActorBuilder
    {
        $this->actor->setCostume('白裙');
        return $this;
    }

    public function buildHairstyle(): ActorBuilder
    {
        $this->actor->setHairstyle('披肩长发');
        return $this;
    }
}

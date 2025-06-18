<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Builder\Extend;

class DevilBuilder extends ActorBuilder
{
    public function __construct()
    {
        $this->actor = new Actor();
    }

    public function buildType(): ActorBuilder
    {
        $this->actor->setType('恶魔');
        return $this;
    }

    public function buildSex(): ActorBuilder
    {
        $this->actor->setSex('妖');
        return $this;
    }

    public function buildFace(): ActorBuilder
    {
        $this->actor->setFace('丑陋');
        return $this;
    }

    public function buildCostume(): ActorBuilder
    {
        $this->actor->setCostume('黑衣');
        return $this;
    }

    public function buildHairstyle(): ActorBuilder
    {
        $this->actor->setHairstyle('光头');
        return $this;
    }
}

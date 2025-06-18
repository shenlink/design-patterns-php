<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Builder\Extend;

class HeroBuilder extends ActorBuilder
{
    public function __construct()
    {
        $this->actor = new Actor();
    }

    public function buildType(): ActorBuilder
    {
        $this->actor->setType('英雄');
        return $this;
    }

    public function buildSex(): ActorBuilder
    {
        $this->actor->setSex('男');
        return $this;
    }

    public function buildFace(): ActorBuilder
    {
        $this->actor->setFace('英俊');
        return $this;
    }

    public function buildCostume(): ActorBuilder
    {
        $this->actor->setCostume('盔甲');
        return $this;
    }

    public function buildHairstyle(): ActorBuilder
    {
        $this->actor->setHairstyle('飘逸');
        return $this;
    }
}

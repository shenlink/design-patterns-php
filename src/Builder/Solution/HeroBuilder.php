<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Builder\Solution;

class HeroBuilder extends ActorBuilder
{
    public function __construct()
    {
        $this->actor = new Actor();
    }

    public function buildType(): void
    {
        $this->actor->setType('英雄');
    }

    public function buildSex(): void
    {
        $this->actor->setSex('男');
    }

    public function buildFace(): void
    {
        $this->actor->setFace('英俊');
    }

    public function buildCostume(): void
    {
        $this->actor->setCostume('盔甲');
    }

    public function buildHairstyle(): void
    {
        $this->actor->setHairstyle('飘逸');
    }
}

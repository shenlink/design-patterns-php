<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Builder\Solution;

class DevilBuilder extends ActorBuilder
{
    public function __construct()
    {
        $this->actor = new Actor();
    }

    public function buildType(): void
    {
        $this->actor->setType('恶魔');
    }

    public function buildSex(): void
    {
        $this->actor->setSex('妖');
    }

    public function buildFace(): void
    {
        $this->actor->setFace('丑陋');
    }

    public function buildCostume(): void
    {
        $this->actor->setCostume('黑衣');
    }

    public function buildHairstyle(): void
    {
        $this->actor->setHairstyle('光头');
    }
}

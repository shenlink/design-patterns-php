<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Builder\Solution;

class AngelBuilder extends ActorBuilder
{
    public function __construct()
    {
        $this->actor = new Actor();
    }

    public function buildType(): void
    {
        $this->actor->setType('天使');
    }

    public function buildSex(): void
    {
        $this->actor->setSex('女');
    }

    public function buildFace(): void
    {
        $this->actor->setFace('漂亮');
    }

    public function buildCostume(): void
    {
        $this->actor->setCostume('白裙');
    }

    public function buildHairstyle(): void
    {
        $this->actor->setHairstyle('披肩长发');
    }
}
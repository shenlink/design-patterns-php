<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Builder\Solution;

class ActorDirector
{
    public function build(ActorBuilder $actorBuilder): Actor
    {
        $actorBuilder->buildType();
        $actorBuilder->buildSex();
        $actorBuilder->buildFace();
        $actorBuilder->buildCostume();
        $actorBuilder->buildHairstyle();

        return $actorBuilder->getActor();
    }
}
<?php

declare(strict_types=1);

namespace Tests\Unit\Builder\Extend;

use Shenlink\DesignPattern\Builder\Extend\Actor;
use Shenlink\DesignPattern\Builder\Extend\ActorBuilder;
use Shenlink\DesignPattern\Builder\Extend\AngelBuilder;
use Shenlink\DesignPattern\Builder\Extend\DevilBuilder;
use Shenlink\DesignPattern\Builder\Extend\HeroBuilder;
use Tests\Support\OutputCapture;
use PHPUnit\Framework\TestCase;

// 建造者测试类
class BuilderTest extends TestCase
{
    private ActorBuilder $actorBuilder;

    public function testBuildAngel(): void
    {
        $this->actorBuilder = new AngelBuilder();
        $angel = $this->actorBuilder->buildType()->buildSex()->buildFace()->buildCostume()->buildHairstyle()->getActor();
        $this->assertInstanceOf(Actor::class, $angel);
        $output = OutputCapture::capture(fn() => $angel->show());
        $this->assertEquals('天使 女 漂亮 白裙 披肩长发', $output);
    }

    public function testBuildDevil(): void
    {
        $this->actorBuilder = new DevilBuilder();
        $devil = $this->actorBuilder->buildType()->buildSex()->buildFace()->buildCostume()->buildHairstyle()->getActor();
        $this->assertInstanceOf(Actor::class, $devil);
        $output = OutputCapture::capture(fn() => $devil->show());
        $this->assertEquals('恶魔 妖 丑陋 黑衣 光头', $output);
    }

    public function testBuildHero(): void
    {
        $this->actorBuilder = new HeroBuilder();
        $hero = $this->actorBuilder->buildType()->buildSex()->buildFace()->buildCostume()->buildHairstyle()->getActor();
        $this->assertInstanceOf(Actor::class, $hero);
        $output = OutputCapture::capture(fn() => $hero->show());
        $this->assertEquals('英雄 男 英俊 盔甲 飘逸', $output);
    }
}
<?php

declare(strict_types=1);

namespace Tests\Unit\Builder\Solution;

use Shenlink\DesignPattern\Builder\Solution\Actor;
use Shenlink\DesignPattern\Builder\Solution\ActorDirector;
use Shenlink\DesignPattern\Builder\Solution\AngelBuilder;
use Shenlink\DesignPattern\Builder\Solution\DevilBuilder;
use Shenlink\DesignPattern\Builder\Solution\HeroBuilder;
use Tests\Support\OutputCapture;
use PHPUnit\Framework\TestCase;

// 建造者测试类
class BuilderTest extends TestCase
{
    private ActorDirector $actorDirector;

    public function setUp(): void
    {
        parent::setUp();
        $this->actorDirector = new ActorDirector();
    }

    public function testBuildAngel(): void
    {
        $angel = $this->actorDirector->build(new AngelBuilder());
        $this->assertInstanceOf(Actor::class, $angel);
        $output = OutputCapture::capture(fn() => $angel->show());
        $this->assertEquals('天使 女 漂亮 白裙 披肩长发', $output);
    }

    public function testBuildDevil(): void
    {
        $devil = $this->actorDirector->build(new DevilBuilder());
        $this->assertInstanceOf(Actor::class, $devil);
        $output = OutputCapture::capture(fn() => $devil->show());
        $this->assertEquals('恶魔 妖 丑陋 黑衣 光头', $output);
    }

    public function testBuildHero(): void
    {
        $hero = $this->actorDirector->build(new HeroBuilder());
        $this->assertInstanceOf(Actor::class, $hero);
        $output = OutputCapture::capture(fn() => $hero->show());
        $this->assertEquals('英雄 男 英俊 盔甲 飘逸', $output);
    }
}

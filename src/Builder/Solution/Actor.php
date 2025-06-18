<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Builder\Solution;

// 角色类
class Actor
{
    // 角色类型
    private string $type;
    // 性别
    private string $sex;
    // 脸型
    private string $face;
    // 服装
    private string $costume;
    // 发型
    private string $hairstyle;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getSex(): string
    {
        return $this->sex;
    }

    public function setSex(string $sex): void
    {
        $this->sex = $sex;
    }

    public function getFace(): string
    {
        return $this->face;
    }

    public function setFace(string $face): void
    {
        $this->face = $face;
    }

    public function getCostume(): string
    {
        return $this->costume;
    }

    public function setCostume(string $costume): void
    {
        $this->costume = $costume;
    }

    public function getHairstyle(): string
    {
        return $this->hairstyle;
    }

    public function setHairstyle(string $hairstyle): void
    {
        $this->hairstyle = $hairstyle;
    }

    public function show(): void
    {
        echo "{$this->type} {$this->sex} {$this->face} {$this->costume} {$this->hairstyle}";
    }
}
<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Builder\Basic;

// 指挥者类，负责协调构建过程，这个不是必须的
class Director
{
    private Builder $builder;

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    // 构建产品
    public function build(): Product
    {
        $this->builder->buildPartA();
        $this->builder->buildPartB();
        $this->builder->buildPartC();

        return $this->builder->getProduct();
    }
}
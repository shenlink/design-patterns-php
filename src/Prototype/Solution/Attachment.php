<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Prototype\Solution;

// 附件类
class Attachment
{
    private string $name;
    private string $description;

    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function download(): void
    {
        echo "下载附件：{$this->name}，描述：{$this->description}";
    }
}

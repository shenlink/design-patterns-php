<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Prototype\Solution;

// 周报类
class WeeklyLog
{
    private string $name;
    private string $date;
    private string $content;
    private Attachment $attachment;

    public function __construct(string $name, string $date, string $content, Attachment $attachment)
    {
        $this->name = $name;
        $this->date = $date;
        $this->content = $content;
        $this->attachment = $attachment;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getAttachment(): Attachment
    {
        return $this->attachment;
    }

    public function __clone()
    {
        $this->attachment = clone $this->attachment;
    }
}
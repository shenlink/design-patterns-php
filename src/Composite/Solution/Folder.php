<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Composite\Solution;

class Folder implements File
{
    private array $files;
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->files = [];
    }

    public function add(File $file): void
    {
        $this->files[] = $file;
    }

    public function remove(File $file): void
    {
        foreach ($this->files as $key => $value) {
            if ($value === $file) {
                unset($this->files[$key]);
            }
        }
    }

    public function getChild(int $index): File
    {
        return $this->files[$index];
    }

    public function killVirus(): void
    {
        foreach ($this->files as $file) {
            $file->killVirus();
        }
    }
}
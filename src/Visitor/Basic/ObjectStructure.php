<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Visitor\Basic;

class ObjectStructure
{
    /**
     * @var Element[]
     */
    private array $elements = [];

    public function add(Element $element): void
    {
        $this->elements[] = $element;
    }

    public function remove(Element $element): void
    {
        $index = array_search($element, $this->elements, true);
        if ($index !== false) {
            unset($this->elements[$index]);
        }
    }

    public function accept(Visitor $visitor): void
    {
        foreach ($this->elements as $element) {
            $element->accept($visitor);
        }
    }
}
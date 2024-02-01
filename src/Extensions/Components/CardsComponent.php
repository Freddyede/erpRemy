<?php

namespace App\Extensions\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('cardsComponent')]
class CardsComponent
{
    public array $elements =  ["Users"];

    public function getElementsProps(): array
    {
        return $this->elements;
    }

    /**
     * @param string $element
     */
    public function setElements(string $element): void
    {
        $this->elements[] = $element;
    }
}
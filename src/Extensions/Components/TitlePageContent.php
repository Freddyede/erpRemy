<?php

namespace App\Extensions\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('titlePage')]
class TitlePageContent
{
    public string $title;
}
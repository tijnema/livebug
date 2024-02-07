<?php

declare(strict_types=1);

namespace App\Components;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent('child_b', 'components/child.html.twig')]
class ChildBComponent
{
    use DefaultActionTrait;

    public function getName(): string
    {
        return 'Child B';
    }
}
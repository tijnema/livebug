<?php

declare(strict_types=1);

namespace App\Components;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent('parent')]
class ParentComponent
{
    use DefaultActionTrait;

    #[LiveProp(writable: true)]
    public bool $even = true;

    #[LiveAction]
    public function switch(): void
    {
        $this->even = !$this->even;
    }
}
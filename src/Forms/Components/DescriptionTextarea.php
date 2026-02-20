<?php

namespace Jenishev\Filament\Forms\Components;

use Filament\Forms\Components\Textarea;

class DescriptionTextarea extends Textarea
{
    public static function getDefaultName(): ?string
    {
        return 'description';
    }

    protected function setUp(): void
    {
        $this->label(__('Description'));

        parent::setUp();
    }
}

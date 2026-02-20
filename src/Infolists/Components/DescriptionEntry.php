<?php

namespace Jenishev\Filament\Infolists\Components;

use Filament\Infolists\Components\TextEntry;

class DescriptionEntry extends TextEntry
{
    public static function getDefaultName(): ?string
    {
        return 'description';
    }

    protected function setUp(): void
    {
        $this->label(__('Description'));
        $this->placeholder('-');

        parent::setUp();
    }
}

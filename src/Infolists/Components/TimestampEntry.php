<?php

namespace Jenishev\Filament\Infolists\Components;

use Filament\Infolists\Components\TextEntry;

class TimestampEntry extends TextEntry
{
    protected function setUp(): void
    {
        $this->dateTime();

        $this->getPlaceholder() or $this->placeholder('—');

        parent::setUp();
    }
}

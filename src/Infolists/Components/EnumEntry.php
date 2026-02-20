<?php

namespace Jenishev\Filament\Infolists\Components;

use BackedEnum;
use Filament\Infolists\Components\TextEntry;
use UnitEnum;

class EnumEntry extends TextEntry
{
    protected function setUp(): void
    {
        $this->formatStateUsing(
            fn (UnitEnum $state) => method_exists($state, 'label')
                ? $state->label()
                : ($state instanceof BackedEnum ? $state->value : $state->name)
        );

        parent::setUp();
    }
}

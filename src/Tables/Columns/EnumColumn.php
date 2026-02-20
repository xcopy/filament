<?php

namespace Jenishev\Filament\Tables\Columns;

use BackedEnum;
use Filament\Tables\Columns\TextColumn;
use UnitEnum;

class EnumColumn extends TextColumn
{
    protected function setUp(): void
    {
        $this->formatStateUsing(
            fn (UnitEnum $state) => method_exists($state, 'label')
                ? $state->label()
                : ($state instanceof BackedEnum ? $state->value : $state->name)
        );
        $this->searchable();
        $this->sortable();
    }
}

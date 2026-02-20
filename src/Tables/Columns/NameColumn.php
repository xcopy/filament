<?php

namespace Jenishev\Filament\Tables\Columns;

use Filament\Tables\Columns\TextColumn;

class NameColumn extends TextColumn
{
    public static function getDefaultName(): ?string
    {
        return 'name';
    }

    protected function setUp(): void
    {
        $this->label(__('Name'));
        $this->searchable();
        $this->sortable();
    }
}

<?php

namespace Jenishev\Filament\Tables\Columns;

use Filament\Tables\Columns\TextColumn;

class IdColumn extends TextColumn
{
    public static function getDefaultName(): ?string
    {
        return 'id';
    }

    protected function setUp(): void
    {
        $this->label('ID');
        $this->searchable();
        $this->sortable();
    }
}

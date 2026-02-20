<?php

namespace Jenishev\Filament\Tables\Columns;

use Filament\Tables\Columns\TextColumn;

class DescriptionColumn extends TextColumn
{
    public static function getDefaultName(): ?string
    {
        return 'description';
    }

    protected function setUp(): void
    {
        $this->label(__('Description'));
        $this->placeholder('-');
        $this->searchable();
    }
}

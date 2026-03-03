<?php

namespace Jenishev\Filament\Tables\Columns;

use Filament\Tables\Columns\TextColumn;

class TimestampColumn extends TextColumn
{
    protected function setUp(): void
    {
        $this->dateTime();
        $this->sortable();
        $this->toggleable();
        $this->toggledHiddenByDefault();

        $this->getPlaceholder() or $this->placeholder('—');
    }
}

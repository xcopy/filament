<?php

namespace Jenishev\Filament\Tables\Columns;

use Filament\Tables\Columns\TextColumn;

class MoneyColumn extends TextColumn
{
    protected function setUp(): void
    {
        $this->money();
        $this->alignEnd();
        $this->searchable();
        $this->sortable();
    }
}

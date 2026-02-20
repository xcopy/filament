<?php

namespace Jenishev\Filament\Infolists\Components;

use Filament\Infolists\Components\TextEntry;

class MoneyEntry extends TextEntry
{
    protected function setUp(): void
    {
        $this->money();
        $this->placeholder('-');

        parent::setUp();
    }
}

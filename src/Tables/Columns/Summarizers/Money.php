<?php

namespace Jenishev\Filament\Tables\Columns\Summarizers;

use Filament\Tables\Columns\Summarizers\Sum;

class Money extends Sum
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->label(''); // empty string
        $this->money();
    }
}

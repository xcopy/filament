<?php

namespace Jenishev\Filament\Forms\Components;

use Filament\Forms\Components\TextInput;

class MoneyInput extends TextInput
{
    protected function setUp(): void
    {
        $this->numeric();
        $this->minValue(0);
        $this->step(.01);

        parent::setUp();
    }
}

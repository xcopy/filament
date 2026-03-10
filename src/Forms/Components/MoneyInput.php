<?php

namespace Jenishev\Filament\Forms\Components;

use Filament\Forms\Components\TextInput;

class MoneyInput extends TextInput
{
    protected function setUp(): void
    {
        $this->prefix(config('filament.default_currency', 'USD'));
        $this->numeric();
        $this->inputMode('decimal');
        $this->minValue(0);
        $this->step(.01);

        parent::setUp();
    }
}

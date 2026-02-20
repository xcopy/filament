<?php

namespace Jenishev\Filament\Forms\Components;

use Filament\Forms\Components\TextInput;

class EmailInput extends TextInput
{
    public static function getDefaultName(): ?string
    {
        return 'email';
    }

    protected function setUp(): void
    {
        $this->label(__('Email'));
        $this->email();

        parent::setUp();
    }
}

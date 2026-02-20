<?php

namespace Jenishev\Filament\Forms\Components;

use Filament\Forms\Components\TextInput;

class NameInput extends TextInput
{
    public static function getDefaultName(): ?string
    {
        return 'name';
    }

    protected function setUp(): void
    {
        $this->label(__('Name'));

        parent::setUp();
    }
}

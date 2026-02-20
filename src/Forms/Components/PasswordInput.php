<?php

namespace Jenishev\Filament\Forms\Components;

use Filament\Forms\Components\TextInput;

class PasswordInput extends TextInput
{
    public static function getDefaultName(): ?string
    {
        return 'password';
    }

    protected function setUp(): void
    {
        $this->label(__('Password'));
        $this->password();

        parent::setUp();
    }
}

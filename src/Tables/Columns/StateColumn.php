<?php

namespace Jenishev\Filament\Tables\Columns;

class StateColumn extends EnumColumn
{
    public static function getDefaultName(): ?string
    {
        return 'state';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->label(__('State'));
        $this->badge();
        $this->color(
            fn ($state) => method_exists($state, 'color')
                ? $state->color()
                : 'gray'
        );
    }
}

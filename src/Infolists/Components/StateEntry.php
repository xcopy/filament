<?php

namespace Jenishev\Filament\Infolists\Components;

class StateEntry extends EnumEntry
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

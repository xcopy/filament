<?php

namespace Jenishev\Filament\QueryBuilder\Constraints;

use Filament\QueryBuilder\Constraints\DateConstraint;
use Illuminate\Support\Str;

class TimestampConstraint
{
    public static function make(string $name, ?string $label = null)
    {
        return DateConstraint::make($name)
            ->label($label ?? Str::headline($name));
    }
}

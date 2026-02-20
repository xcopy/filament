<?php

namespace Jenishev\Filament\QueryBuilder\Constraints;

use Filament\QueryBuilder\Constraints\RelationshipConstraint;
use Filament\Tables\Filters\QueryBuilder\Constraints\RelationshipConstraint\Operators\IsRelatedToOperator;
use Illuminate\Support\Str;

class ActorConstraint
{
    public static function make(string $name, ?string $label = null, string $titleAttribute = 'name')
    {
        return RelationshipConstraint::make($name)
            ->label($label ?? Str::headline($name))
            ->selectable(
                IsRelatedToOperator::make()
                    ->titleAttribute($titleAttribute)
                    ->searchable()
            );
    }
}

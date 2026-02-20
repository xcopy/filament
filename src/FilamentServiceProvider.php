<?php

namespace Jenishev\Filament;

use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Jenishev\Filament\Tables\Columns\TimestampColumn;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('filament');
    }

    public function packageBooted(): void
    {
        $this->configureFilamentDefaultDataFormatting();
        $this->configureFilamentTable();
        $this->registerFilamentTableMacros();
        $this->registerFilamentSchemaMacros();
    }

    protected function configureFilamentDefaultDataFormatting(): void
    {
        $modifyUsing = function (Table|Schema $component) {
            $component
                ->defaultCurrency(config('filament.default_currency', 'USD'))
                ->defaultDateDisplayFormat(config('filament.default_date_display_format', 'd M, Y'))
                ->defaultDateTimeDisplayFormat(config('filament.default_date_time_display_format', 'd M, Y H:i'))
                ->defaultTimeDisplayFormat(config('filament.default_time_display_format', 'H:i'));
        };

        Table::configureUsing($modifyUsing);
        Schema::configureUsing($modifyUsing);
    }

    protected function configureFilamentTable(): void
    {
        Table::configureUsing(function (Table $table) {
            $table
                ->paginationPageOptions(config('filament.pagination_page_options', [10, 25, 50]))
                ->defaultPaginationPageOption(config('filament.default_pagination_page_option', 25))
                ->defaultSort(
                    config('filament.default_sort_column', 'id'),
                    config('filament.default_sort_direction', 'desc')
                );
        });
    }

    protected function registerFilamentTableMacros(): void
    {
        Table::macro('timestampColumns', function () {
            /** @phpstan-ignore-next-line */
            $modelClass = $this->getModel();
            $model = new $modelClass;
            $columns = [];

            if ($model->usesTimestamps()) {
                $columns[] = $model->getCreatedAtColumn();
                $columns[] = $model->getUpdatedAtColumn();
            }

            if (method_exists($modelClass, 'isSoftDeletable') && $modelClass::isSoftDeletable()) {
                $columns[] = $model->getDeletedAtColumn();
            }

            /** @phpstan-ignore-next-line */
            return $this->pushColumns(
                collect($columns)
                    ->map(fn ($column) => TimestampColumn::make($column)->label(__(Str::headline($column))))
                    ->all()
            );
        });
    }

    protected function registerFilamentSchemaMacros(): void {}
}

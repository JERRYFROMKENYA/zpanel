<?php

namespace App\Filament\Resources\RelationGoalResource\Pages;

use App\Filament\Resources\RelationGoalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRelationGoals extends ListRecords
{
    protected static string $resource = RelationGoalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\RelationGoalResource\Pages;

use App\Filament\Resources\RelationGoalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRelationGoal extends EditRecord
{
    protected static string $resource = RelationGoalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

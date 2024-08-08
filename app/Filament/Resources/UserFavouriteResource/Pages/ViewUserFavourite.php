<?php

namespace App\Filament\Resources\UserFavouriteResource\Pages;

use App\Filament\Resources\UserFavouriteResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewUserFavourite extends ViewRecord
{
    protected static string $resource = UserFavouriteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

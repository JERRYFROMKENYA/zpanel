<?php

namespace App\Filament\Resources\UserFavouriteResource\Pages;

use App\Filament\Resources\UserFavouriteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserFavourites extends ListRecords
{
    protected static string $resource = UserFavouriteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\UserFavouriteResource\Pages;

use App\Filament\Resources\UserFavouriteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserFavourite extends EditRecord
{
    protected static string $resource = UserFavouriteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

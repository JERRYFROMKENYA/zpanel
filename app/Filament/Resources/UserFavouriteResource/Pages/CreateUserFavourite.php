<?php

namespace App\Filament\Resources\UserFavouriteResource\Pages;

use App\Filament\Resources\UserFavouriteResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUserFavourite extends CreateRecord
{
    protected static string $resource = UserFavouriteResource::class;
}

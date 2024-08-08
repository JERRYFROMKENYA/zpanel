<?php

namespace App\Filament\Resources\UserProfileImageResource\Pages;

use App\Filament\Resources\UserProfileImageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserProfileImages extends ListRecords
{
    protected static string $resource = UserProfileImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

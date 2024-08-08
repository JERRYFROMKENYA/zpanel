<?php

namespace App\Filament\Resources\UserProfileImageResource\Pages;

use App\Filament\Resources\UserProfileImageResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewUserProfileImage extends ViewRecord
{
    protected static string $resource = UserProfileImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

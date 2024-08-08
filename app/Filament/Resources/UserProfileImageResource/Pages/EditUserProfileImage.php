<?php

namespace App\Filament\Resources\UserProfileImageResource\Pages;

use App\Filament\Resources\UserProfileImageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserProfileImage extends EditRecord
{
    protected static string $resource = UserProfileImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

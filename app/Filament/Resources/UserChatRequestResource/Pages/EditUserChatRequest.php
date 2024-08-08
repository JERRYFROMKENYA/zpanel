<?php

namespace App\Filament\Resources\UserChatRequestResource\Pages;

use App\Filament\Resources\UserChatRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserChatRequest extends EditRecord
{
    protected static string $resource = UserChatRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

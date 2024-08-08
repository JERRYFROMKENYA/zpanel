<?php

namespace App\Filament\Resources\UserChatResource\Pages;

use App\Filament\Resources\UserChatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserChat extends EditRecord
{
    protected static string $resource = UserChatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

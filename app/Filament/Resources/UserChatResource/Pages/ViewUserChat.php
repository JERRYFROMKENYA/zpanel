<?php

namespace App\Filament\Resources\UserChatResource\Pages;

use App\Filament\Resources\UserChatResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewUserChat extends ViewRecord
{
    protected static string $resource = UserChatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

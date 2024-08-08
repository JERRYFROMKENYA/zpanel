<?php

namespace App\Filament\Resources\UserChatRequestResource\Pages;

use App\Filament\Resources\UserChatRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewUserChatRequest extends ViewRecord
{
    protected static string $resource = UserChatRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

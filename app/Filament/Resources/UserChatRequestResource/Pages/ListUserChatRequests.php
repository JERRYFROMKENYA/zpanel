<?php

namespace App\Filament\Resources\UserChatRequestResource\Pages;

use App\Filament\Resources\UserChatRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserChatRequests extends ListRecords
{
    protected static string $resource = UserChatRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

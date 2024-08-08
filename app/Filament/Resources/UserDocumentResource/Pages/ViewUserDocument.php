<?php

namespace App\Filament\Resources\UserDocumentResource\Pages;

use App\Filament\Resources\UserDocumentResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewUserDocument extends ViewRecord
{
    protected static string $resource = UserDocumentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

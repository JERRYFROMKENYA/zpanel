<?php

namespace App\Filament\Resources\PlanPurchaseHistoryResource\Pages;

use App\Filament\Resources\PlanPurchaseHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlanPurchaseHistory extends EditRecord
{
    protected static string $resource = PlanPurchaseHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

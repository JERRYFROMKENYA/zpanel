<?php

namespace App\Filament\Resources\PlanPurchaseHistoryResource\Pages;

use App\Filament\Resources\PlanPurchaseHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPlanPurchaseHistory extends ViewRecord
{
    protected static string $resource = PlanPurchaseHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

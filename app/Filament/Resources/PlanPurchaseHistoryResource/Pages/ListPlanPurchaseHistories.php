<?php

namespace App\Filament\Resources\PlanPurchaseHistoryResource\Pages;

use App\Filament\Resources\PlanPurchaseHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlanPurchaseHistories extends ListRecords
{
    protected static string $resource = PlanPurchaseHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

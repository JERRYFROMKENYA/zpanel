<?php

namespace App\Filament\Resources\PaymentListResource\Pages;

use App\Filament\Resources\PaymentListResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPaymentList extends ViewRecord
{
    protected static string $resource = PaymentListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

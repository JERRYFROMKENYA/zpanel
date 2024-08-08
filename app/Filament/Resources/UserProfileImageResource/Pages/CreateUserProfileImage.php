<?php

namespace App\Filament\Resources\UserProfileImageResource\Pages;

use App\Filament\Resources\UserProfileImageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUserProfileImage extends CreateRecord
{
    protected static string $resource = UserProfileImageResource::class;
}

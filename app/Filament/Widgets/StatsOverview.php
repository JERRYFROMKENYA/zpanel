<?php

namespace App\Filament\Widgets;

use App\Models\AppUser;
use App\Models\FAQ;
use App\Models\Interest;
use App\Models\Language;
use App\Models\Page;
use App\Models\Plan;
use App\Models\PlanPurchaseHistory;
use App\Models\RelationGoal;
use App\Models\Religion;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Interests', Interest::query()->count())
                ->Icon('heroicon-o-face-smile'),
            Stat::make('Language', Language::query()->count())
                ->Icon('heroicon-o-language'),
            Stat::make('Religion', Religion::query()->count())
                ->Icon('heroicon-o-home-modern'),
            Stat::make('Relation Goal', RelationGoal::query()->count())
                ->Icon('heroicon-o-check'),
            Stat::make('FAQ', FAQ::query()->count())
                ->Icon('heroicon-o-chat-bubble-left-right'),
            Stat::make('Plan', Plan::query()->count())
                ->Icon('heroicon-o-puzzle-piece'),
            Stat::make('Total Users', AppUser::query()->count())
                ->Icon('heroicon-o-user-group'),
            Stat::make('Admins', User::query()->count())
                ->Icon('heroicon-o-user-group'),
            Stat::make('Pages', Page::query()->count())
                ->Icon('heroicon-o-clipboard-document'),
//            Stat::make('Gifts', Gift::query()->count())
//                ->Icon('heroicon-m-arrow-trending-up'),
//            Stat::make('Packages', Package::query()->count())
//                ->Icon('heroicon-m-arrow-trending-up'),
            Stat::make('Total Male Users', AppUser::query()->where('gender', 'male')->count())
                ->icon('heroicon-o-user-group'),
            Stat::make('Total Female Users', AppUser::query()->where('gender', 'female')->count())
                ->icon('heroicon-o-user-group'),
            Stat::make('Total Fake Users', AppUser::query()->where('is_verify',false)->count())
                ->Icon('heroicon-o-user-minus'),
            Stat::make('Total Earnings',"$ ".PlanPurchaseHistory::query()->sum('amount'))
                ->Icon('heroicon-o-currency-dollar')
            //
        ];
    }
}

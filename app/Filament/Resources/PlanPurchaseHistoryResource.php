<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlanPurchaseHistoryResource\Pages;
use App\Filament\Resources\PlanPurchaseHistoryResource\RelationManagers;
use App\Models\PlanPurchaseHistory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PlanPurchaseHistoryResource extends Resource
{
    protected static ?string $model = PlanPurchaseHistory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('uid')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('plan_id')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('p_name')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\DateTimePicker::make('t_date')
                    ->required(),
                Forms\Components\TextInput::make('amount')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('day')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('plan_title')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('plan_description')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\DatePicker::make('expire_date')
                    ->required(),
                Forms\Components\DatePicker::make('start_date')
                    ->required(),
                Forms\Components\Textarea::make('trans_id')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('p_method_id')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('uid')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('plan_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('t_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('amount')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('day')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('expire_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('start_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('p_method_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPlanPurchaseHistories::route('/'),
            'create' => Pages\CreatePlanPurchaseHistory::route('/create'),
            'view' => Pages\ViewPlanPurchaseHistory::route('/{record}'),
            'edit' => Pages\EditPlanPurchaseHistory::route('/{record}/edit'),
        ];
    }
}

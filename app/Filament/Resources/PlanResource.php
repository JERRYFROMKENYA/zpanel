<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlanResource\Pages;
use App\Filament\Resources\PlanResource\RelationManagers;
use App\Models\Plan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PlanResource extends Resource
{
    protected static ?string $model = Plan::class;

    protected static ?string $navigationIcon = 'heroicon-o-puzzle-piece';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('title')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('amt')->name("Amount")
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Radio::make('filter_include')
                    ->required()
                    ->options([
                        1 => 'Yes',
                        0 => 'No',
                    ]),
                Forms\Components\TextInput::make('day_limit')
                    ->required()
                    ->numeric(),
                Forms\Components\Radio::make('direct_chat')
                    ->required()
                    ->options([
                        1 => 'Yes',
                        0 => 'No',
                    ]),
                Forms\Components\Radio::make('Like_menu')
                    ->required()
                    ->options([
                        1 => 'Yes',
                        0 => 'No',
                    ]),
                Forms\Components\Radio::make('audio_video')
                    ->required()
                    ->options([
                        1 => 'Yes',
                        0 => 'No',
                    ]),
                Forms\Components\Radio::make('status')
                    ->required()
                    ->options([
                        1 => 'Active',
                        0 => 'Inactive',
                    ]),
                Forms\Components\TextInput::make('chat')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('amt')->name("Amount")
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('filter_include')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('day_limit')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('direct_chat')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Like_menu')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('audio_video')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('chat')
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
            'index' => Pages\ListPlans::route('/'),
            'create' => Pages\CreatePlan::route('/create'),
            'view' => Pages\ViewPlan::route('/{record}'),
            'edit' => Pages\EditPlan::route('/{record}/edit'),
        ];
    }
}

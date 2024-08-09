<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaymentListResource\Pages;
use App\Filament\Resources\PaymentListResource\RelationManagers;
use App\Models\PaymentList;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PaymentListResource extends Resource
{
    protected static ?string $model = PaymentList::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('title')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('img')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('attributes')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Radio::make('status')
                    ->required()
                    ->options([
                        1 => 'Active',
                        0 => 'Inactive',
                    ]),
                Forms\Components\Textarea::make('subtitle')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Radio::make('p_show')->name("Show on Wallet?")
                    ->required()
                    ->options([
                        1 => 'Yes',
                        0 => 'No',
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('img')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('attributes')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('subtitle')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('p_show')->name("Show On Wallet?")
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
            'index' => Pages\ListPaymentLists::route('/'),
            'create' => Pages\CreatePaymentList::route('/create'),
            'view' => Pages\ViewPaymentList::route('/{record}'),
            'edit' => Pages\EditPaymentList::route('/{record}/edit'),
        ];
    }
}

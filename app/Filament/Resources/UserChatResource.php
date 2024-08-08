<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserChatResource\Pages;
use App\Filament\Resources\UserChatResource\RelationManagers;
use App\Models\UserChat;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserChatResource extends Resource
{
    protected static ?string $model = UserChat::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_1_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('user_2_id')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('message')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\DateTimePicker::make('sent_time')
                    ->required(),
                Forms\Components\TextInput::make('status')
                    ->required()
                    ->numeric()
                    ->default(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_1_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user_2_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sent_time')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
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
            'index' => Pages\ListUserChats::route('/'),
            'create' => Pages\CreateUserChat::route('/create'),
            'view' => Pages\ViewUserChat::route('/{record}'),
            'edit' => Pages\EditUserChat::route('/{record}/edit'),
        ];
    }
}

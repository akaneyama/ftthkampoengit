<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserftthResource\Pages;
use App\Filament\Resources\UserftthResource\RelationManagers;
use App\Models\userftth;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;

class UserftthResource extends Resource
{
    protected static ?string $model = userftth::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function getPluralLabel(): string
    {
        return 'Data User FTTH'; // Mengatur label plural menjadi "Fat"
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_user_ftth')
                ->label('Nama User')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('alamat_user_ftth')
                ->label('Alamat')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('nomor_telp')
                ->label('Nomor Telepon')
                ->required()
                ->maxLength(20),
                Forms\Components\TextInput::make('ip_address')
                ->label('IP Address')
                ->required()
                ->maxLength(100),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_user_ftth')
                ->label('Nama User')
                ->searchable(),
                Tables\Columns\TextColumn::make('alamat_user_ftth')
                ->label('Alamat')
                ->searchable(),
                Tables\Columns\TextColumn::make('nomor_telp')
                ->label('Nomor Telp')
                ->searchable(),
                Tables\Columns\TextColumn::make('ip_address')
                ->label('IP Address')
                ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                DeleteAction::make(),
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
            'index' => Pages\ListUserftths::route('/'),
            'create' => Pages\CreateUserftth::route('/create'),
            'edit' => Pages\EditUserftth::route('/{record}/edit'),
        ];
    }
}

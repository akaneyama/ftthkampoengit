<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FatResource\Pages;
use App\Filament\Resources\FatResource\RelationManagers;
use App\Models\fat;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;

class FatResource extends Resource
{
    protected static ?string $model = fat::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function getPluralLabel(): string
    {
        return 'Data Fat'; // Mengatur label plural menjadi "Fat"
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_fat')
                ->label('Nama FAT')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('alamat_fat')
                ->label('Alamat FAT')
                ->required()
                ->maxLength(20),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_fat')
                ->label('Nama FAT')
                ->searchable(),
                Tables\Columns\TextColumn::make('alamat_fat')
                ->label('Alamat FAT')
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
            'index' => Pages\ListFats::route('/'),
            'create' => Pages\CreateFat::route('/create'),
            'edit' => Pages\EditFat::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OltResource\Pages;
use App\Filament\Resources\OltResource\RelationManagers;
use App\Models\olt;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;

class OltResource extends Resource
{
    protected static ?string $model = olt::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function getPluralLabel(): string
    {
        return 'Data Olt'; // Mengatur label plural menjadi "Fat"
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_olt')
                ->label('Nama OLT')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('pon_olt')
                ->label('Pon OlT')
                ->required()
                ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_olt')
                ->label('Nama OLT')
                ->searchable(),
                Tables\Columns\TextColumn::make('pon_olt')
                ->label('Pon OLT')
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
            'index' => Pages\ListOlts::route('/'),
            'create' => Pages\CreateOlt::route('/create'),
            'edit' => Pages\EditOlt::route('/{record}/edit'),
        ];
    }
}

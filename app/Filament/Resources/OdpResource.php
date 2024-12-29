<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OdpResource\Pages;
use App\Filament\Resources\OdpResource\RelationManagers;
use App\Models\odp;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
class OdpResource extends Resource
{
    protected static ?string $model = odp::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function getPluralLabel(): string
    {
        return 'Data Odp'; // Mengatur label plural menjadi "Fat"
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_odp')
                ->label('Nama ODP')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('alamat_odp')
                ->label('Alamat ODP')
                ->required()
                ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_odp')
                ->label('Nama ODP')
                ->searchable(),
                Tables\Columns\TextColumn::make('alamat_odp')
                ->label('Alamat ODP')
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
            'index' => Pages\ListOdps::route('/'),
            'create' => Pages\CreateOdp::route('/create'),
            'edit' => Pages\EditOdp::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OdcResource\Pages;
use App\Filament\Resources\OdcResource\RelationManagers;
use App\Models\odc;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;

class OdcResource extends Resource
{
    protected static ?string $model = odc::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function getPluralLabel(): string
    {
        return 'Data Odc'; // Mengatur label plural menjadi "Fat"
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_odc')
                ->label('Nama ODC')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('port_odc')
                ->label('Port ODC')
                ->required()
                ->maxLength(255),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_odc')
                ->label('Nama ODC')
                ->searchable(),
                Tables\Columns\TextColumn::make('port_odc')
                ->label('Port ODC')
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
            'index' => Pages\ListOdcs::route('/'),
            'create' => Pages\CreateOdc::route('/create'),
            'edit' => Pages\EditOdc::route('/{record}/edit'),
        ];
    }
}

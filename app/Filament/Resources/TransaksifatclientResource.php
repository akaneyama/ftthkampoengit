<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransaksifatclientResource\Pages;
use App\Filament\Resources\TransaksifatclientResource\RelationManagers;
use App\Models\TransaksiFatClient;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Models\fat;
use App\Models\odp;
use App\Models\odc;
use App\Models\olt;
use App\Models\userftth;

class TransaksifatclientResource extends Resource
{
    protected static ?string $model = TransaksiFatClient::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function getPluralLabel(): string
    {
        return 'Transaksi FTTH'; // Mengatur label plural menjadi "Fat"
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //userftth
                Forms\Components\Select::make('id_user_ftth')
                ->relationship('userftth', 'nama_user_ftth') // Relasi ke tabel customer, menampilkan Name_Customer
                ->searchable() // Agar Select ini searchable
                ->placeholder('Pilih User') // Menambahkan placeholder
                ->label('User FTTH') // Label kolom
                ->required() // Menandakan bahwa ini wajib diisi
                ->options(function () {
                    return userftth::all()->pluck('nama_user_ftth', 'id_user_ftth'); // Menampilkan semua customer sebagai opsi
                }),
                //olt
                Forms\Components\Select::make('id_olt')
                ->relationship('olt', 'nama_olt') // Relasi ke tabel customer, menampilkan Name_Customer
                ->searchable() // Agar Select ini searchable
                ->placeholder('Pilih OLT') // Menambahkan placeholder
                ->label('OLT') // Label kolom
                ->required() // Menandakan bahwa ini wajib diisi
                ->options(function () {
                    return olt::all()->pluck('nama_olt', 'id_olt'); // Menampilkan semua customer sebagai opsi
                }),
                //odc
                Forms\Components\Select::make('id_odc')
                ->relationship('odc', 'nama_odc') // Relasi ke tabel customer, menampilkan Name_Customer
                ->searchable() // Agar Select ini searchable
                ->placeholder('Pilih ODC') // Menambahkan placeholder
                ->label('ODC') // Label kolom
                ->required() // Menandakan bahwa ini wajib diisi
                ->options(function () {
                    return odc::all()->pluck('nama_odc', 'id_odc'); // Menampilkan semua customer sebagai opsi
                }),
                //fat
                Forms\Components\Select::make('id_fat')
                ->relationship('fat', 'nama_fat') // Relasi ke tabel customer, menampilkan Name_Customer
                ->searchable() // Agar Select ini searchable
                ->placeholder('Pilih FAT') // Menambahkan placeholder
                ->label('FAT') // Label kolom
                ->required() // Menandakan bahwa ini wajib diisi
                ->options(function () {
                    return fat::all()->pluck('nama_fat', 'id_fat'); // Menampilkan semua customer sebagai opsi
                }),
                //odp
                Forms\Components\Select::make('id_odp')
                ->relationship('odp', 'nama_odp') // Relasi ke tabel customer, menampilkan Name_Customer
                ->searchable() // Agar Select ini searchable
                ->placeholder('Pilih ODP') // Menambahkan placeholder
                ->label('ODP') // Label kolom
                ->required() // Menandakan bahwa ini wajib diisi
                ->options(function () {
                    return odp::all()->pluck('nama_odp', 'id_odp'); // Menampilkan semua customer sebagai opsi
                }),
                Forms\Components\TextInput::make('warna_kabel')
                ->label('Warna Kabel')
                ->required()
                ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('userftth.nama_user_ftth')->label('User FTTH')
                ->searchable(),
                Tables\Columns\TextColumn::make('olt.nama_olt')->label('OLT')
                ->searchable(),
                Tables\Columns\TextColumn::make('odc.nama_odc')->label('ODC')
                ->searchable(),
                Tables\Columns\TextColumn::make('fat.nama_fat')->label('FAT')
                ->searchable(),
                Tables\Columns\TextColumn::make('odp.nama_odp')->label('ODP')
                ->searchable(),
                Tables\Columns\TextColumn::make('warna_kabel')->label('Warna Kabel'),
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
            'index' => Pages\ListTransaksifatclients::route('/'),
            'create' => Pages\CreateTransaksifatclient::route('/create'),
            'edit' => Pages\EditTransaksifatclient::route('/{record}/edit'),
        ];
    }
}

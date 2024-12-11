<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MUnitResource\Pages;
use App\Models\MUnit;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;


class MUnitResource extends Resource
{
    protected static ?string $model = MUnit::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Unit';
    protected static ?string $navigationGroup = 'Master Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name_unit')
                    ->label('Nama Unit')
                    ->required()
                    ->maxLength(255),
                
                Forms\Components\TextInput::make('type_unit')
                    ->label('Tipe Unit')
                    ->maxLength(255),
                
                Forms\Components\TextInput::make('lt_unit')
                    ->label('LT Unit')
                    ->maxLength(255),
                
                Forms\Components\TextInput::make('luas_tanah_unit')
                    ->label('Luas Tanah Unit')
                    ->numeric()
                    ->prefix('m²'),
                
                Forms\Components\TextInput::make('luas_bangunan_unit')
                    ->label('Luas Bangunan Unit')
                    ->numeric()
                    ->prefix('m²'),
                
                Forms\Components\Textarea::make('deskripsi_1_unit')
                    ->label('Deskripsi 1')
                    ->rows(3),
                
                Forms\Components\Textarea::make('deskripsi_2_unit')
                    ->label('Deskripsi 2')
                    ->rows(3),
                
                Forms\Components\Textarea::make('deskripsi_3_unit')
                    ->label('Deskripsi 3')
                    ->rows(3),
                
                Forms\Components\Textarea::make('deskripsi_4_unit')
                    ->label('Deskripsi 4')
                    ->rows(3),
                
                Forms\Components\Textarea::make('deskripsi_5_unit')
                    ->label('Deskripsi 5')
                    ->rows(3),
                
                Forms\Components\Textarea::make('deskripsi_6_unit')
                    ->label('Deskripsi 6')
                    ->rows(3),
                    Forms\Components\FileUpload::make('gambar_unit')
                    ->label('Gambar Unit')
                    ->image()
                    ->directory('unit-images')
                    ->getUploadedFileNameForStorageUsing(fn ($file) => $file->hashName('unit-images'))
                    ->maxSize(5120)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name_unit')
                    ->label('Nama Unit')
                    ->searchable(),
                
                Tables\Columns\TextColumn::make('type_unit')
                    ->label('Tipe Unit')
                    ->searchable(),
                
                Tables\Columns\TextColumn::make('lt_unit')
                    ->label('LT Unit'),
                
                Tables\Columns\TextColumn::make('luas_tanah_unit')
                    ->label('Luas Tanah')
                    ->suffix(' m²'),
                
                Tables\Columns\TextColumn::make('luas_bangunan_unit')
                    ->label('Luas Bangunan')
                    ->suffix(' m²'),
                    Tables\Columns\ImageColumn::make('gambar_unit')
                    ->label('Gambar Unit')
                    ->circular()
                    ->url(fn ($record) => $record->gambar_unit_url),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageMUnits::route('/'),
        ];
    }
}
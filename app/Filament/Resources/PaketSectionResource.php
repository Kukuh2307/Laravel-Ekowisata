<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaketSectionResource\Pages;
use App\Filament\Resources\PaketSectionResource\RelationManagers;
use App\Models\PaketSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PaketSectionResource extends Resource
{
    protected static ?string $model = PaketSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Paket Section';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->label('Image')
                    ->disk('public')
                    ->directory('paket_sections')
                    ->visibility('public')
                    ->imagePreviewHeight('200')
                    ->getUploadedFileNameForStorageUsing(fn ($file) => $file->hashName())
                    ->dehydrated(true)
                    ->preserveFilenames()
                    ->columnSpanFull()
                    ->default(fn ($record) => $record?->image_url)
                    ->image(),
                Forms\Components\TextInput::make('title')
                    ->maxLength(255)
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->placeholder('Masukkan Nama Paket')
                    ->label('Nama Paket')
                    ->default(null),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->label('Price')
                    ->placeholder('Masukkan Harga Paket')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Textarea::make('description')
                        ->required()
                        ->label('Description')
                        ->rows(5)
                        ->placeholder('Masukkan Deskripsi')
                        ->columnSpanFull(),
                Forms\Components\Textarea::make('facilities')
                    ->required()
                    ->label('Facilities')
                    ->rows(5)
                    ->placeholder('Masukkan Facilities')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->searchable(),
                Tables\Columns\TextColumn::make('time')
                    ->searchable(),
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
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPaketSections::route('/'),
            'create' => Pages\CreatePaketSection::route('/create'),
            'edit' => Pages\EditPaketSection::route('/{record}/edit'),
        ];
    }
}

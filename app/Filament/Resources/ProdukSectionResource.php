<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProdukSectionResource\Pages;
use App\Filament\Resources\ProdukSectionResource\RelationManagers;
use App\Models\ProdukSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProdukSectionResource extends Resource
{
    protected static ?string $model = ProdukSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Produk Section';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->columnSpanFull()
                    ->label('Image')
                    ->disk('public')
                    ->directory('produk_sections')
                    ->visibility('public')
                    ->imagePreviewHeight('200')
                    ->getUploadedFileNameForStorageUsing(fn ($file) => $file->hashName())
                    ->dehydrated(true)
                    ->preserveFilenames()
                    ->default(fn ($record) => $record?->image_url),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->columnSpanFull()
                    ->label('Title')
                    ->placeholder('Masukkan Nama Produk')
                    ->unique(ignoreRecord: true)
                    ->maxLength(255)
                    ->default(null),
                    Forms\Components\TextInput::make('price')
                    ->required()
                    ->columnSpanFull()
                    ->label('Price')
                    ->placeholder('Masukkan Harga Produk')
                    ->numeric()
                    ->maxLength(255)
                    ->default(null),
                    Forms\Components\Textarea::make('description')
                        ->required()
                        ->label('Description')
                        ->placeholder('Masukkan Deskripsi')
                        ->rows(10)
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
            'index' => Pages\ListProdukSections::route('/'),
            'create' => Pages\CreateProdukSection::route('/create'),
            'edit' => Pages\EditProdukSection::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtikelSectionResource\Pages;
use App\Filament\Resources\ArtikelSectionResource\RelationManagers;
use App\Models\ArtikelSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArtikelSectionResource extends Resource
{
    protected static ?string $model = ArtikelSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Artikel Section';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // image, title, description
                Forms\Components\FileUpload::make('image')
                    ->label('Image')
                    ->disk('public')
                    ->directory('artikel_sections')
                    ->visibility('public')
                    ->image()
                    ->imagePreviewHeight('200')
                    ->getUploadedFileNameForStorageUsing(fn ($file) => $file->hashName())
                    ->dehydrated(true)
                    ->preserveFilenames()
                    ->columnSpanFull()
                    ->default(fn ($record) => $record?->image_url),
                Forms\Components\TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull()
                    ->default(null),
                Forms\Components\Textarea::make('description')
                    ->label('Description')
                    ->required()
                    ->columnSpanFull()
                    ->rows(10),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->limit(50)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Description')
                    ->limit(50)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
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
            'index' => Pages\ListArtikelSections::route('/'),
            'create' => Pages\CreateArtikelSection::route('/create'),
            'edit' => Pages\EditArtikelSection::route('/{record}/edit'),
        ];
    }
}

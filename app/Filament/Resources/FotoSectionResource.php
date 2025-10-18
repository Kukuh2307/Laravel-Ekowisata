<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FotoSectionResource\Pages;
use App\Filament\Resources\FotoSectionResource\RelationManagers;
use App\Models\FotoSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FotoSectionResource extends Resource
{
    protected static ?string $model = FotoSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Foto Section';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->label('Image')
                    ->disk('public')
                    ->directory('foto_sections')
                    ->visibility('public')
                    ->columnSpanFull()
                    ->imagePreviewHeight('200')
                    ->getUploadedFileNameForStorageUsing(fn ($file) => $file->hashName())
                    ->dehydrated(true)
                    ->preserveFilenames()
                    ->default(fn ($record) => $record?->image_url),
                Forms\Components\Textarea::make('title')
                    ->required()
                    ->rows(5)
                    ->label('Description')
                    ->columnSpanFull()
                    ->placeholder('Masukkan Deskripsi')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('title')
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
            'index' => Pages\ListFotoSections::route('/'),
            'create' => Pages\CreateFotoSection::route('/create'),
            'edit' => Pages\EditFotoSection::route('/{record}/edit'),
        ];
    }
}

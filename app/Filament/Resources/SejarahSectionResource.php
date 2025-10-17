<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SejarahSectionResource\Pages;
use App\Filament\Resources\SejarahSectionResource\RelationManagers;
use App\Models\SejarahSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SejarahSectionResource extends Resource
{
    protected static ?string $model = SejarahSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Sejarah Section';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\FileUpload::make('image')
                //     ->label('Image')
                //         ->disk('public')
                //         ->directory('sejarah_sections')
                //         ->visibility('public')
                //         ->image()
                //         ->imagePreviewHeight('200')
                //         ->getUploadedFileNameForStorageUsing(fn ($file) => $file->hashName())
                //         ->dehydrated(true)
                //         ->preserveFilenames()
                //         ->default(fn ($record) => $record?->image_url),
                Forms\Components\TextInput::make('title')
                    ->label('Title')
                    ->columnSpanFull()
                     ->required()
                    ->placeholder('Masukkan Judul')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Textarea::make('description')
                    ->label('Description')
                    ->placeholder('Masukkan Deskripsi')
                     ->required()
                    ->columnSpanFull()
                    ->rows(5),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
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
                // Tables\Actions\DeleteAction::make(),
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

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSejarahSections::route('/'),
            'create' => Pages\CreateSejarahSection::route('/create'),
            'edit' => Pages\EditSejarahSection::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DokumentasiSectionResource\Pages;
use App\Filament\Resources\DokumentasiSectionResource\RelationManagers;
use App\Models\DokumentasiSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DokumentasiSectionResource extends Resource
{
    protected static ?string $model = DokumentasiSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Dokumentasi Section';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                    Forms\Components\Section::make('Dokumentasi Section Information')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->label('Image')
                            ->disk('public')
                            ->directory('dokumentasi_sections')
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
                            ->default(null)
                            ->columnSpanFull()
                            ->required(),
                        Forms\Components\Textarea::make('description')
                            ->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->columnSpanFull()
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image')
                    ->circular()
                    ->height(60)
                    ->square(),
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
            'index' => Pages\ListDokumentasiSections::route('/'),
            'create' => Pages\CreateDokumentasiSection::route('/create'),
            'edit' => Pages\EditDokumentasiSection::route('/{record}/edit'),
        ];
    }
}

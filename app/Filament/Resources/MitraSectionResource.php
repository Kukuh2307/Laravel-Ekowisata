<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MitraSectionResource\Pages;
use App\Filament\Resources\MitraSectionResource\RelationManagers;
use App\Models\MitraSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Section;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MitraSectionResource extends Resource
{
    protected static ?string $model = MitraSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Mitra Section';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Mitra Section Information')
                    ->schema([
                        Forms\Components\FileUpload::make('icon')
                            ->label('Icon')
                            ->disk('public')
                            ->directory('mitra_sections')
                            ->visibility('public')
                            ->imagePreviewHeight('200')
                            ->getUploadedFileNameForStorageUsing(fn ($file) => $file->hashName())
                            ->dehydrated(true)
                            ->preserveFilenames()
                            ->default(fn ($record) => $record?->icon),

                        Forms\Components\TextInput::make('title')
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\Textarea::make('description')
                            ->rows(4)
                            ->default(null)
                            ->columnSpanFull(),
                    ])
                ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('icon')
                    ->disk('public')
                    ->label('Icon')
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
            'index' => Pages\ListMitraSections::route('/'),
            'create' => Pages\CreateMitraSection::route('/create'),
            'edit' => Pages\EditMitraSection::route('/{record}/edit'),
        ];
    }
}

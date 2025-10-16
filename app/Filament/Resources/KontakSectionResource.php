<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KontakSectionResource\Pages;
use App\Filament\Resources\KontakSectionResource\RelationManagers;
use App\Models\KontakSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KontakSectionResource extends Resource
{
    protected static ?string $model = KontakSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Kontak Section';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->label('Email')
                    ->placeholder('pVY9o@example.com')
                    ->unique(ignoreRecord: true)
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->label('Nomor Telepon')
                    ->placeholder('081234567890')
                    ->unique(ignoreRecord: true)
                    ->required()
                    ->maxLength(25),
                Forms\Components\Textarea::make('facebook')
                    ->label('Facebook')
                     ->placeholder('https://www.facebook.com/yourprofile')
                    ->required(),
                Forms\Components\Textarea::make('instagram')
                    ->label('Instagram')
                    ->placeholder('https://www.instagram.com/yourprofile')  
                    ->required(),
                Forms\Components\Textarea::make('twitter')
                    ->label('Twitter')
                    ->placeholder('https://www.twitter.com/yourprofile')
                    ->required(),
                Forms\Components\Textarea::make('youtube')
                    ->label('YouTube')
                    ->placeholder('https://www.youtube.com/yourchannel')
                    ->required(),
                Forms\Components\TextArea::make('address')
                    ->label('Alamat')
                    ->required()
                    ->rows(4)
                    ->columnSpanFull()
                    ->placeholder('Jl. Contoh Alamat No.123, Kota, Negara')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
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
            'index' => Pages\ListKontakSections::route('/'),
            'create' => Pages\CreateKontakSection::route('/create'),
            'edit' => Pages\EditKontakSection::route('/{record}/edit'),
        ];
    }
}

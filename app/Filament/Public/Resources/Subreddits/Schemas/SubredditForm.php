<?php

declare(strict_types=1);

namespace App\Filament\Public\Resources\Subreddits\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

final class SubredditForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->unique('subreddits', 'name')
                    ->validationMessages([
                        'unique' => 'Este nome já está em uso. Escolha outro.',
                    ])
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, $set): void {
                        $set('slug', Str::slug($state));
                    }),
                TextInput::make('slug')
                    ->required()
                    ->unique('subreddits', 'slug')
                    ->validationMessages([
                        'unique' => 'Este slug já está em uso. Escolha outro.',
                    ]),
                Textarea::make('description')
                    ->columnSpanFull(),
                FileUpload::make('icon_image')
                    ->image()
                    ->disk('public')
                    ->directory('subreddits/icons')
                    ->visibility('public')
                    ->acceptedFileTypes(['image/jpeg', 'image/png'])
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('1:1')
                    ->imageResizeTargetWidth('200')
                    ->imageResizeTargetHeight('200')
                    ->helperText('Tamanho máximo: 2MB. Formatos aceitos: JPG, PNG')
                    ->maxSize(2048),
                Hidden::make('user_id')
                    ->default(auth()->id()),
            ]);
    }
}

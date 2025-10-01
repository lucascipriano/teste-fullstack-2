<?php

declare(strict_types=1);

namespace App\Filament\Public\Resources\Subreddits\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

final class SubredditInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('slug'),
                TextEntry::make('description')
                    ->placeholder('-')
                    ->columnSpanFull(),
                ImageEntry::make('icon_image')
                    ->getStateUsing(fn ($record) => $record->icon_image ? asset('storage/'.$record->icon_image) : null)
                    ->placeholder('-')
                    ->height(100)
                    ->width(100)
                    ->circular(),
                TextEntry::make('user.name')
                    ->label('User'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}

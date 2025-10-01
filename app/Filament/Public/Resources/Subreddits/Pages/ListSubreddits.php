<?php

declare(strict_types=1);

namespace App\Filament\Public\Resources\Subreddits\Pages;

use App\Filament\Public\Resources\Subreddits\SubredditResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

final class ListSubreddits extends ListRecords
{
    protected static string $resource = SubredditResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

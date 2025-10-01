<?php

declare(strict_types=1);

namespace App\Filament\Public\Resources\Subreddits\Pages;

use App\Filament\Public\Resources\Subreddits\SubredditResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateSubreddit extends CreateRecord
{
    protected static string $resource = SubredditResource::class;
}

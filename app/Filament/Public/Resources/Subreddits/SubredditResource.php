<?php

declare(strict_types=1);

namespace App\Filament\Public\Resources\Subreddits;

use App\Filament\Public\Resources\Subreddits\Pages\CreateSubreddit;
use App\Filament\Public\Resources\Subreddits\Pages\EditSubreddit;
use App\Filament\Public\Resources\Subreddits\Pages\ListSubreddits;
use App\Filament\Public\Resources\Subreddits\Schemas\SubredditForm;
use App\Filament\Public\Resources\Subreddits\Tables\SubredditsTable;
use App\Models\Subreddit;
use BackedEnum;
use Filament\Navigation\NavigationItem;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

final class SubredditResource extends Resource
{
    protected static ?string $model = Subreddit::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return SubredditForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SubredditsTable::configure($table);
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
            'index' => ListSubreddits::route('/'),
            'create' => CreateSubreddit::route('/create'),
            'edit' => EditSubreddit::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return Auth::check();
    }

    public static function canEdit(Model $record): bool
    {
        return Auth::check() && Auth::id() === $record->user_id;
    }

    public static function getNavigationItems(): array
    {
        if (! Auth::check()) {
            return [];
        }

        $userSubreddits = Subreddit::query()->where('user_id', Auth::id())
            ->orderBy('name')
            ->get();

        $items = [];

        foreach ($userSubreddits as $subreddit) {
            $items[] = NavigationItem::make($subreddit->name)
                ->url(self::getUrl('edit', ['record' => $subreddit]))
                ->icon($subreddit->icon_image ? asset('storage/'.$subreddit->icon_image) : 'heroicon-o-rectangle-stack')
                ->group('Meus Subreddits');
        }

        return $items;
    }
}

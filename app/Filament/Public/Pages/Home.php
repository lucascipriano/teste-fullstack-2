<?php

declare(strict_types=1);

namespace App\Filament\Public\Pages;

use Filament\Pages\Page;

final class Home extends Page
{
    protected static ?string $slug = '/';

    protected string $view = 'livewire.home.index';
}

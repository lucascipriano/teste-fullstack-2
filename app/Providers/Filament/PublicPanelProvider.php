<?php

declare(strict_types=1);

namespace App\Providers\Filament;

use App\Filament\Public\Pages\Home;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

final class PublicPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('public')
            ->default()
            ->path('')
            ->colors([
                'primary' => Color::Purple,
            ])
            ->viteTheme('resources/css/filament/public/theme.css')
            ->discoverResources(in: app_path('Filament/Public/Resources'), for: 'App\Filament\Public\Resources')
            ->discoverPages(in: app_path('Filament/Public/Pages'), for: 'App\Filament\Public\Pages')
            ->pages([
                Home::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Public/Widgets'), for: 'App\Filament\Public\Widgets')
            ->widgets([
                FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ]);
    }
}

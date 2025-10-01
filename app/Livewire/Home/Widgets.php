<?php

declare(strict_types=1);

namespace App\Livewire\Home;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class Widgets extends Component
{
    public function render(): Factory|View
    {
        return view('livewire.home.widgets');
    }
}

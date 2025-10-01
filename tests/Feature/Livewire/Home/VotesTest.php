<?php

declare(strict_types=1);

use App\Livewire\Home\Votes;
use Livewire\Livewire;

it('renders successfully', function (): void {
    Livewire::test(Votes::class)
        ->assertStatus(200);
});

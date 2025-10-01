<?php

declare(strict_types=1);

use App\Livewire\Home\LastCommunities;
use Livewire\Livewire;

it('renders successfully', function (): void {
    Livewire::test(LastCommunities::class)
        ->assertStatus(200);
});

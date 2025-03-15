<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Klinik;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class KlinikTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Klinik::class)
            ->assertStatus(200);
    }
}

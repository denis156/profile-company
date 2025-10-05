<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Title('Kontak')]
#[Layout('components.layouts.landing-page')]
class Kontak extends Component
{
    public function render()
    {
        return view('livewire.landing-page.kontak');
    }
}

<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Title('Galeri')]
#[Layout('components.layouts.landing-page')]
class Galeri extends Component
{
    public function render()
    {
        return view('livewire.landing-page.galeri');
    }
}

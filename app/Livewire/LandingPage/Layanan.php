<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Title('Layanan')]
#[Layout('components.layouts.landing-page')]
class Layanan extends Component
{
    public function render()
    {
        return view('livewire.landing-page.layanan');
    }
}

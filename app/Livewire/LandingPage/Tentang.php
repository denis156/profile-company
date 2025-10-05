<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Title('Tentang Kami')]
#[Layout('components.layouts.landing-page')]
class Tentang extends Component
{
    public function render()
    {
        return view('livewire.landing-page.tentang');
    }
}

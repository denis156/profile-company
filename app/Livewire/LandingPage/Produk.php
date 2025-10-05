<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Title('Produk')]
#[Layout('components.layouts.landing-page')]
class Produk extends Component
{
    public function render()
    {
        return view('livewire.landing-page.produk');
    }
}

<?php

namespace App\Livewire\LandingPage\Components;

use Livewire\Component;

class BgPattren extends Component
{
    public function render()
    {
        return <<<'HTML'
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]"></div>
        HTML;
    }
}

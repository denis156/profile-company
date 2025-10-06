<?php

namespace App\Livewire\LandingPage\Components\Layanan;

use Livewire\Component;
use Livewire\Attributes\On;

class Hero extends Component
{
    public $isEnglish = true;

    public $content = [];

    public function mount()
    {
        $this->isEnglish = session('language', 'en') === 'en';
        $this->loadContent();
    }

    public function loadContent()
    {
        $this->content = [
            'badge' => [
                'id' => 'Solusi Terpadu',
                'en' => 'Integrated Solutions',
            ],
            'heading' => [
                'id' => 'Layanan Profesional untuk',
                'en' => 'Professional Services for',
            ],
            'headingAccent' => [
                'id' => 'Kesuksesan Bisnis Anda',
                'en' => 'Your Business Success',
            ],
            'description' => [
                'id' => 'Kami menyediakan tiga pilar layanan utama yang dirancang untuk mendukung pertumbuhan dan keberhasilan proyek Anda',
                'en' => 'We provide three main service pillars designed to support the growth and success of your projects',
            ],
            'services' => [
                [
                    'label' => [
                        'id' => 'Perdagangan Batuan dan Pasir',
                        'en' => 'Rock and Sand Trading',
                    ],
                ],
                [
                    'label' => [
                        'id' => 'Distributor Semen',
                        'en' => 'Cement Distributor',
                    ],
                ],
                [
                    'label' => [
                        'id' => 'Jasa Perkapalan',
                        'en' => 'Shipping Services',
                    ],
                ],
            ],
        ];
    }

    public function getText($item)
    {
        if (is_array($item)) {
            return $this->isEnglish ? $item['en'] : $item['id'];
        }
        return $item;
    }

    #[On('language-changed')]
    public function updateLanguage($language)
    {
        $this->isEnglish = $language === 'en';
        $this->loadContent();
    }

    public function render()
    {
        return view('livewire.landing-page.components.layanan.hero');
    }
}

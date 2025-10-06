<?php

namespace App\Livewire\LandingPage\Components\Beranda;

use Livewire\Component;
use Livewire\Attributes\On;

class Hero extends Component
{
    public $isEnglish = true;

    public $content = [];

    public function mount()
    {
        // Load bahasa dari session, default English
        $this->isEnglish = session('language', 'en') === 'en';

        $this->loadContent();
    }

    public function loadContent()
    {
        $this->content = [
            'badge' => [
                'id' => 'Terpercaya Sejak 2022',
                'en' => 'Trusted Since 2022',
            ],
            'heading' => [
                'id' => 'Solusi Terpadu untuk',
                'en' => 'Integrated Solutions for',
            ],
            'headingAccent' => [
                'id' => 'Bisnis Anda',
                'en' => 'Your Business',
            ],
            'description' => [
                'id' => 'PT. Fathiyah Nugraha Group adalah perusahaan terpercaya yang bergerak di bidang perdagangan batuan dan pasir, distributor semen, dan jasa perkapalan dengan komitmen memberikan layanan terbaik.',
                'en' => 'PT. Fathiyah Nugraha Group is a trusted company operating in the field of stone and sand trading, cement distribution, and shipping services with a commitment to providing the best service.',
            ],
            'ctaContact' => [
                'id' => 'Hubungi Kami',
                'en' => 'Contact Us',
            ],
            'ctaAbout' => [
                'id' => 'Tentang Kami',
                'en' => 'About Us',
            ],
            'stats' => [
                [
                    'value' => '3+',
                    'label' => [
                        'id' => 'Tahun Berpengalaman',
                        'en' => 'Years of Experience',
                    ],
                ],
                [
                    'value' => '23+',
                    'label' => [
                        'id' => 'Unit Armada',
                        'en' => 'Fleet Units',
                    ],
                ],
                [
                    'value' => '100%',
                    'label' => [
                        'id' => 'Legalitas Resmi',
                        'en' => 'Official Legality',
                    ],
                ],
            ],
            'floatingCard' => [
                'title' => [
                    'id' => 'Terpercaya & Profesional',
                    'en' => 'Trusted & Professional',
                ],
                'subtitle' => [
                    'id' => 'Sertifikasi Lengkap',
                    'en' => 'Complete Certification',
                ],
            ],
        ];
    }

    public function getText($item)
    {
        return $this->isEnglish ? $item['en'] : $item['id'];
    }

    #[On('language-changed')]
    public function updateLanguage($language)
    {
        $this->isEnglish = $language === 'en';
        $this->loadContent();
    }

    public function render()
    {
        return view('livewire.landing-page.components.beranda.hero');
    }
}

<?php

namespace App\Livewire\LandingPage\Components;

use Livewire\Component;
use Livewire\Attributes\On;

class Footer extends Component
{
    public $isEnglish = false;

    // Company info
    public $companyInfo = [];

    // Navigation links
    public $navigationLinks = [];

    // Information links
    public $informationLinks = [];

    // Contact info
    public $contactInfo = [];

    // Social media
    public $socialMedia = [];

    // Copyright
    public $copyright = [];

    public function mount()
    {
        // Load bahasa dari session
        $this->isEnglish = session('language', 'id') === 'en';

        $this->loadContent();
    }

    public function loadContent()
    {
        // Company Info
        $this->companyInfo = [
            'name' => 'PT. FNG',
            'fullName' => 'Fathiyah Nugraha Group',
            'description' => [
                'id' => 'Perusahaan terpercaya di bidang perdagangan batuan dan pasir, distributor semen, dan jasa perkapalan. Memberikan solusi terbaik untuk kebutuhan bisnis Anda.',
                'en' => 'A trusted company in the field of stone and sand trading, cement distribution, and shipping services. Providing the best solutions for your business needs.',
            ],
        ];

        // Navigation Links
        $this->navigationLinks = [
            [
                'route' => 'beranda',
                'label' => [
                    'id' => 'Beranda',
                    'en' => 'Home',
                ],
            ],
            [
                'route' => 'tentang-kami',
                'label' => [
                    'id' => 'Tentang Kami',
                    'en' => 'About Us',
                ],
            ],
            [
                'route' => 'layanan',
                'label' => [
                    'id' => 'Layanan',
                    'en' => 'Services',
                ],
            ],
            [
                'route' => 'produk',
                'label' => [
                    'id' => 'Produk',
                    'en' => 'Products',
                ],
            ],
        ];

        // Information Links
        $this->informationLinks = [
            [
                'route' => 'mitra',
                'label' => [
                    'id' => 'Mitra',
                    'en' => 'Partners',
                ],
            ],
            [
                'route' => 'galeri',
                'label' => [
                    'id' => 'Galeri',
                    'en' => 'Gallery',
                ],
            ],
            [
                'route' => 'kontak',
                'label' => [
                    'id' => 'Kontak',
                    'en' => 'Contact',
                ],
            ],
        ];

        // Contact Info
        $this->contactInfo = [
            'address' => 'Jl. Lawata Kompleks Ruko Lawata No 20. Tobuuha, Kec Puuwatu Kota Kendari Sulawesi Tenggara 93111',
            'phone' => '+62 852-4069-6956 an. Yudi Hermawan S.ab',
            'phoneLink' => '+6285240696956',
            'email' => 'pt.fathiyahnugrahagroup@gmail.com',
        ];

        // Social Media
        $this->socialMedia = [
            [
                'name' => 'Facebook',
                'icon' => 'fab.facebook',
                'url' => '#',
            ],
            [
                'name' => 'Instagram',
                'icon' => 'fab.instagram',
                'url' => '#',
            ],
            [
                'name' => 'LinkedIn',
                'icon' => 'fab.linkedin',
                'url' => '#',
            ],
            [
                'name' => 'WhatsApp',
                'icon' => 'fab.whatsapp',
                'url' => '#',
            ],
        ];

        // Copyright
        $this->copyright = [
            'company' => 'PT. Fathiyah Nugraha Group',
            'text' => [
                'id' => 'Hak Cipta Dilindungi',
                'en' => 'All rights reserved',
            ],
            'developedBy' => [
                'id' => 'Dikembangkan oleh',
                'en' => 'Developed by',
            ],
            'developer' => [
                'name' => 'Denis Djodian Ardika',
                'url' => 'https://github.com/denis156',
            ],
            'mainSystem' => [
                'label' => 'Main System',
                'url' => '#',
            ],
        ];
    }

    public function getLabel($item)
    {
        return $this->isEnglish ? $item['label']['en'] : $item['label']['id'];
    }

    public function getText($item)
    {
        return $this->isEnglish ? $item['en'] : $item['id'];
    }

    #[On('language-changed')]
    public function updateLanguage($language)
    {
        // Update isEnglish berdasarkan bahasa yang dipilih
        $this->isEnglish = $language === 'en';

        // Reload content dengan bahasa baru
        $this->loadContent();
    }

    public function render()
    {
        return view('livewire.landing-page.components.footer');
    }
}

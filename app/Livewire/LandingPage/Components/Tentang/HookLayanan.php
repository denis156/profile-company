<?php

namespace App\Livewire\LandingPage\Components\Tentang;

use Livewire\Component;
use Livewire\Attributes\On;

class HookLayanan extends Component
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
                'id' => 'Apa yang Kami Tawarkan',
                'en' => 'What We Offer',
            ],
            'heading' => [
                'id' => 'Layanan Kami',
                'en' => 'Our Services',
            ],
            'description' => [
                'id' => 'Solusi terpadu untuk kebutuhan bisnis Anda dengan layanan profesional dan berkualitas',
                'en' => 'Integrated solutions for your business needs with professional and quality services',
            ],
            'service1' => [
                'title' => [
                    'id' => 'Perdagangan Batuan dan Pasir',
                    'en' => 'Rock and Sand Trading',
                ],
                'description' => [
                    'id' => 'Penyediaan material batuan berkualitas dan pasir untuk kebutuhan konstruksi dengan izin resmi IPP',
                    'en' => 'Provision of quality rock materials and sand for construction needs with official IPP permits',
                ],
                'cta' => [
                    'id' => 'Lihat Detail',
                    'en' => 'View Details',
                ],
            ],
            'service2' => [
                'title' => [
                    'id' => 'Distributor Semen',
                    'en' => 'Cement Distributor',
                ],
                'description' => [
                    'id' => 'Distribusi semen berkualitas tinggi dengan jaringan pengiriman yang luas dan terpercaya',
                    'en' => 'Distribution of high-quality cement with extensive and reliable delivery network',
                ],
                'cta' => [
                    'id' => 'Lihat Detail',
                    'en' => 'View Details',
                ],
            ],
            'service3' => [
                'title' => [
                    'id' => 'Jasa Perkapalan',
                    'en' => 'Shipping Services',
                ],
                'description' => [
                    'id' => 'Layanan transportasi dan distribusi material via laut dengan armada tongkang yang handal',
                    'en' => 'Marine transportation and material distribution services with reliable barge fleet',
                ],
                'cta' => [
                    'id' => 'Lihat Detail',
                    'en' => 'View Details',
                ],
            ],
            'cta_button' => [
                'id' => 'Jelajahi Semua Layanan',
                'en' => 'Explore All Services',
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
        return view('livewire.landing-page.components.tentang.hook-layanan');
    }
}

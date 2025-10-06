<?php

namespace App\Livewire\LandingPage\Components\Layanan;

use Livewire\Component;
use Livewire\Attributes\On;

class ServiceSatu extends Component
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
                'id' => 'Layanan Utama',
                'en' => 'Main Service',
            ],
            'heading' => [
                'id' => 'Perdagangan Batuan dan Pasir',
                'en' => 'Rock and Sand Trading',
            ],
            'headingAccent' => [
                'id' => 'Berkualitas',
                'en' => 'Quality',
            ],
            'description' => [
                'id' => 'Penyediaan material batuan berkualitas tinggi dan pasir untuk berbagai kebutuhan konstruksi, didukung izin resmi IPP dan armada distribusi yang handal.',
                'en' => 'Provision of high-quality rock materials and sand for various construction needs, supported by official IPP permits and reliable distribution fleet.',
            ],
            'advantagesTitle' => [
                'id' => 'Keunggulan Kami:',
                'en' => 'Our Advantages:',
            ],
            'feature1Title' => [
                'id' => 'Izin Resmi IPP',
                'en' => 'Official IPP Permit',
            ],
            'feature1Desc' => [
                'id' => 'SK No. 230822004081700001 tertanggal 14 Februari 2023',
                'en' => 'SK No. 230822004081700001 dated February 14, 2023',
            ],
            'feature2Title' => [
                'id' => 'Material Berkualitas Tinggi',
                'en' => 'High-Quality Materials',
            ],
            'feature2Desc' => [
                'id' => 'Batuan dan pasir pilihan untuk berbagai kebutuhan konstruksi',
                'en' => 'Selected rocks and sand for various construction needs',
            ],
            'feature3Title' => [
                'id' => 'Armada Distribusi Lengkap',
                'en' => 'Complete Distribution Fleet',
            ],
            'feature3Desc' => [
                'id' => '2 Excavator, 9 Truck, 2 Crusher untuk operasional maksimal',
                'en' => '2 Excavators, 9 Trucks, 2 Crushers for maximum operations',
            ],
            'feature4Title' => [
                'id' => 'Pengiriman Tepat Waktu',
                'en' => 'On-Time Delivery',
            ],
            'feature4Desc' => [
                'id' => 'Sistem logistik terintegrasi untuk kepastian pasokan',
                'en' => 'Integrated logistics system for supply certainty',
            ],
            'statsLabel' => [
                'id' => 'Unit Armada Siap Operasi',
                'en' => 'Fleet Units Ready to Operate',
            ],
            'imageAlt' => [
                'id' => 'Perdagangan Batuan dan Pasir',
                'en' => 'Rock and Sand Trading',
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
        return view('livewire.landing-page.components.layanan.service-satu');
    }
}

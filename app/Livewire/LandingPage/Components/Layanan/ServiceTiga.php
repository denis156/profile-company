<?php

namespace App\Livewire\LandingPage\Components\Layanan;

use Livewire\Component;
use Livewire\Attributes\On;

class ServiceTiga extends Component
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
                'id' => 'Layanan Maritim',
                'en' => 'Maritime Services',
            ],
            'heading' => [
                'id' => 'Jasa Perkapalan',
                'en' => 'Shipping Services',
            ],
            'headingContinuation' => [
                'id' => 'Profesional',
                'en' => 'Professional',
            ],
            'description' => [
                'id' => 'Layanan transportasi dan distribusi material via laut dengan armada tongkang yang handal dan berpengalaman untuk kebutuhan logistik maritim Anda.',
                'en' => 'Transportation and material distribution services via sea with reliable and experienced barge fleet for your maritime logistics needs.',
            ],
            'sectionTitle' => [
                'id' => 'Layanan Kami:',
                'en' => 'Our Services:',
            ],
            'service1Title' => [
                'id' => 'Transportasi Material via Laut',
                'en' => 'Material Transportation via Sea',
            ],
            'service1Desc' => [
                'id' => 'Pengiriman batuan, pasir, dan semen menggunakan armada tongkang',
                'en' => 'Delivery of rocks, sand, and cement using barge fleet',
            ],
            'service2Title' => [
                'id' => 'Operasional Dermaga',
                'en' => 'Port Operations',
            ],
            'service2Desc' => [
                'id' => 'Bongkar muat material dengan excavator dan sistem yang efisien',
                'en' => 'Loading and unloading materials with excavators and efficient systems',
            ],
            'service3Title' => [
                'id' => 'Logistik Terintegrasi',
                'en' => 'Integrated Logistics',
            ],
            'service3Desc' => [
                'id' => 'Sistem distribusi dari tongkang ke truck untuk pengiriman akhir',
                'en' => 'Distribution system from barge to truck for final delivery',
            ],
            'service4Title' => [
                'id' => 'Standar Keamanan Tinggi',
                'en' => 'High Safety Standards',
            ],
            'service4Desc' => [
                'id' => 'Prosedur keselamatan maritim dan penanganan material yang terjamin',
                'en' => 'Maritime safety procedures and guaranteed material handling',
            ],
            'floatingCardTitle' => [
                'id' => 'Armada Tongkang',
                'en' => 'Barge Fleet',
            ],
            'floatingCardDesc' => [
                'id' => 'Transportasi Maritim Handal',
                'en' => 'Reliable Maritime Transportation',
            ],
            'altText' => [
                'id' => 'Jasa Perkapalan',
                'en' => 'Shipping Services',
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
        return view('livewire.landing-page.components.layanan.service-tiga');
    }
}

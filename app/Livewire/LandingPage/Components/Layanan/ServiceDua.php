<?php

namespace App\Livewire\LandingPage\Components\Layanan;

use Livewire\Component;
use Livewire\Attributes\On;

class ServiceDua extends Component
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
            'badge_trusted' => [
                'id' => 'Layanan Terpercaya',
                'en' => 'Trusted Service',
            ],
            'title_highlight' => [
                'id' => 'Distributor Semen',
                'en' => 'Cement Distributor',
            ],
            'title_main' => [
                'id' => 'Terpercaya',
                'en' => 'Trusted',
            ],
            'description' => [
                'id' => 'Distribusi semen berkualitas tinggi dengan jaringan pengiriman yang luas dan sistem logistik terintegrasi untuk kepastian pasokan Anda.',
                'en' => 'High-quality cement distribution with extensive delivery network and integrated logistics system for your supply certainty.',
            ],
            'advantages_title' => [
                'id' => 'Keunggulan Kami:',
                'en' => 'Our Advantages:',
            ],
            'advantage_1_title' => [
                'id' => 'Produk Berkualitas Tinggi',
                'en' => 'High-Quality Products',
            ],
            'advantage_1_desc' => [
                'id' => 'Semen premium dari brand terpercaya dengan standar SNI',
                'en' => 'Premium cement from trusted brands with SNI standards',
            ],
            'advantage_2_title' => [
                'id' => 'Jaringan Distribusi Luas',
                'en' => 'Extensive Distribution Network',
            ],
            'advantage_2_desc' => [
                'id' => 'Jangkauan pengiriman ke seluruh wilayah Sulawesi Tenggara',
                'en' => 'Delivery coverage throughout Southeast Sulawesi region',
            ],
            'advantage_3_title' => [
                'id' => 'Stok Terjamin',
                'en' => 'Guaranteed Stock',
            ],
            'advantage_3_desc' => [
                'id' => 'Persediaan selalu tersedia untuk kebutuhan proyek Anda',
                'en' => 'Stock always available for your project needs',
            ],
            'partnership_title' => [
                'id' => 'Pengiriman Terpercaya',
                'en' => 'Trusted Delivery',
            ],
            'partnership_desc' => [
                'id' => 'Didukung armada pengiriman lengkap dengan 9 unit truck dan sistem tracking real-time',
                'en' => 'Supported by complete delivery fleet with 9 truck units and real-time tracking system',
            ],
            'floating_badge_title' => [
                'id' => 'IPP Resmi 2023',
                'en' => 'Official IPP 2023',
            ],
            'floating_badge_sk' => [
                'id' => 'SK No. 230822004081700001',
                'en' => 'SK No. 230822004081700001',
            ],
            'alt_image' => [
                'id' => 'Distributor Semen',
                'en' => 'Cement Distributor',
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
        return view('livewire.landing-page.components.layanan.service-dua');
    }
}

<?php

namespace App\Livewire\LandingPage\Components\Layanan;

use Livewire\Component;
use Livewire\Attributes\On;

class HookProduk extends Component
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
                'id' => 'Katalog Produk Kami',
                'en' => 'Our Product Catalog',
            ],
            'title' => [
                'id' => 'Material Batuan Berkualitas',
                'en' => 'Quality Rock Materials',
            ],
            'description' => [
                'id' => 'Menyediakan berbagai jenis material batuan dan konstruksi dengan kualitas terjamin dan harga kompetitif',
                'en' => 'Providing various types of rock and construction materials with guaranteed quality and competitive prices',
            ],
            'product1' => [
                'badge' => [
                    'id' => 'Material Batuan',
                    'en' => 'Rock Material',
                ],
                'name' => [
                    'id' => 'Batu Split 0,5',
                    'en' => 'Split Stone 0.5',
                ],
                'description' => [
                    'id' => 'Ukuran 5-10 mm cocok untuk campuran aspal atau lapisan dasar paving block',
                    'en' => 'Size 5-10 mm suitable for asphalt mixture or paving block base layer',
                ],
            ],
            'product2' => [
                'badge' => [
                    'id' => 'Material Batuan',
                    'en' => 'Rock Material',
                ],
                'name' => [
                    'id' => 'Batu Split 2/3',
                    'en' => 'Split Stone 2/3',
                ],
                'description' => [
                    'id' => 'Ukuran 20-30 mm untuk pengecoran struktural jalan beton dan jembatan',
                    'en' => 'Size 20-30 mm for structural concrete road and bridge casting',
                ],
            ],
            'product3' => [
                'badge' => [
                    'id' => 'Material Batuan',
                    'en' => 'Rock Material',
                ],
                'name' => [
                    'id' => 'Abu Batu',
                    'en' => 'Stone Dust',
                ],
                'description' => [
                    'id' => 'Untuk campuran aspal, bahan pengeras jalan, atau sebagai pengganti pasir',
                    'en' => 'For asphalt mixture, road hardening material, or as sand substitute',
                ],
            ],
            'product4' => [
                'badge' => [
                    'id' => 'Material Khusus',
                    'en' => 'Special Material',
                ],
                'name' => [
                    'id' => 'Pasir Silika',
                    'en' => 'Silica Sand',
                ],
                'description' => [
                    'id' => 'Untuk industri semen, kaca, keramik, sandblasting, dan pengolahan air',
                    'en' => 'For cement, glass, ceramic, sandblasting, and water treatment industries',
                ],
            ],
            'cta' => [
                'id' => 'Lihat Semua Produk',
                'en' => 'View All Products',
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
        return view('livewire.landing-page.components.layanan.hook-produk');
    }
}

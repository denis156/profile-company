<?php

namespace App\Livewire\LandingPage\Components\Produk;

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
                'id' => 'Katalog Produk',
                'en' => 'Product Catalog',
            ],
            'heading' => [
                'id' => 'Material Batuan',
                'en' => 'Rock Materials',
            ],
            'headingAccent' => [
                'id' => 'Berkualitas Tinggi',
                'en' => 'High Quality',
            ],
            'description' => [
                'id' => 'Menyediakan berbagai jenis material batuan dan konstruksi dengan kualitas terjamin dan harga kompetitif',
                'en' => 'Providing various types of rock and construction materials with guaranteed quality and competitive prices',
            ],
            'stat1Label' => [
                'id' => 'Jenis Produk',
                'en' => 'Product Types',
            ],
            'stat2Label' => [
                'id' => 'Kualitas Terjamin',
                'en' => 'Guaranteed Quality',
            ],
            'stat3Label' => [
                'id' => 'Resmi 2023',
                'en' => 'Official 2023',
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
        return view('livewire.landing-page.components.produk.hero');
    }
}

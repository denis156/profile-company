<?php

namespace App\Livewire\LandingPage\Components\Produk;

use Livewire\Attributes\On;
use Livewire\Component;

class ListProduct extends Component
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
                'id' => 'Material Berkualitas',
                'en' => 'Quality Materials',
            ],
            'heading' => [
                'id' => 'Produk Kami',
                'en' => 'Our Products',
            ],
            'description' => [
                'id' => 'Semua produk dilengkapi dengan sertifikat kualitas dan izin IPP resmi',
                'en' => 'All products are equipped with quality certificates and official IPP permits',
            ],
            'categories' => [
                'rock' => [
                    'id' => 'Material Batuan',
                    'en' => 'Rock Material',
                ],
                'construction' => [
                    'id' => 'Konstruksi',
                    'en' => 'Construction',
                ],
                'special' => [
                    'id' => 'Material Khusus',
                    'en' => 'Special Material',
                ],
            ],
            'product1' => [
                'category' => 'rock',
                'title' => [
                    'id' => 'Batu Split ukuran 0,5',
                    'en' => 'Split Stone size 0.5',
                ],
                'description' => [
                    'id' => 'Batu Split ukuran 0,5 (5-10 mm) biasa disebut screening atau abu batu kasar. Cocok untuk campuran aspal atau lapisan dasar paving block.',
                    'en' => 'Split stone size 0.5 (5-10 mm) commonly called screening or coarse stone dust. Suitable for asphalt mixture or paving block base layer.',
                ],
                'alt' => [
                    'id' => 'Batu Split 0,5',
                    'en' => 'Split Stone 0.5',
                ],
            ],
            'product2' => [
                'category' => 'rock',
                'title' => [
                    'id' => 'Batu Split ukuran 1/2',
                    'en' => 'Split Stone size 1/2',
                ],
                'description' => [
                    'id' => 'Batu Split ukuran 1/2 (10-20 mm) digunakan untuk pengecoran ringan, seperti pengecoran dinding, dak rumah, atau lantai.',
                    'en' => 'Split stone size 1/2 (10-20 mm) used for light casting, such as wall casting, house roof, or floors.',
                ],
                'alt' => [
                    'id' => 'Batu Split 1/2',
                    'en' => 'Split Stone 1/2',
                ],
            ],
            'product3' => [
                'category' => 'rock',
                'title' => [
                    'id' => 'Batu Split ukuran 2/3',
                    'en' => 'Split Stone size 2/3',
                ],
                'description' => [
                    'id' => 'Batu Split ukuran 2/3 (20-30 mm). Umumnya dipakai untuk pengecoran struktural yang lebih besar seperti jalan beton, jembatan, atau tiang pancang.',
                    'en' => 'Split stone size 2/3 (20-30 mm). Generally used for larger structural casting such as concrete roads, bridges, or pile foundations.',
                ],
                'alt' => [
                    'id' => 'Batu Split 2/3',
                    'en' => 'Split Stone 2/3',
                ],
            ],
            'product4' => [
                'category' => 'rock',
                'title' => [
                    'id' => 'Batu Split ukuran 4,9',
                    'en' => 'Split Stone size 4.9',
                ],
                'description' => [
                    'id' => 'Batu ukuran besar. Digunakan untuk pemadatan dasar jalan atau pondasi bangunan berat.',
                    'en' => 'Large size stone. Used for road base compaction or heavy building foundations.',
                ],
                'alt' => [
                    'id' => 'Batu Split 4,9',
                    'en' => 'Split Stone 4.9',
                ],
            ],
            'product5' => [
                'category' => 'rock',
                'title' => [
                    'id' => 'Abu Batu',
                    'en' => 'Stone Dust',
                ],
                'description' => [
                    'id' => 'Digunakan untuk campuran aspal, bahan pengeras jalan, atau sebagai pengganti pasir.',
                    'en' => 'Used for asphalt mixture, road hardening material, or as sand substitute.',
                ],
                'alt' => [
                    'id' => 'Abu Batu',
                    'en' => 'Stone Dust',
                ],
            ],
            'product6' => [
                'category' => 'construction',
                'title' => [
                    'id' => 'Lapisan Pondasi Agregat (LPA)',
                    'en' => 'Aggregate Foundation Layer (LPA)',
                ],
                'description' => [
                    'id' => 'Campuran Agregat kasar dan halus. Digunakan sebagai pondasi bawah pada konstruksi jalan.',
                    'en' => 'Mixture of coarse and fine aggregate. Used as subbase foundation in road construction.',
                ],
                'alt' => [
                    'id' => 'LPA',
                    'en' => 'LPA',
                ],
            ],
            'product7' => [
                'category' => 'construction',
                'title' => [
                    'id' => 'Lapisan Pondasi Bawah (LPB)',
                    'en' => 'Subbase Foundation Layer (LPB)',
                ],
                'description' => [
                    'id' => 'Lapisan struktur yang digunakan dalam konstruksi jalan, khususnya pada perkeras anfleksibel.',
                    'en' => 'Structural layer used in road construction, especially on inflexible pavement.',
                ],
                'alt' => [
                    'id' => 'LPB',
                    'en' => 'LPB',
                ],
            ],
            'product8' => [
                'category' => 'special',
                'title' => [
                    'id' => 'Pasir Silika',
                    'en' => 'Silica Sand',
                ],
                'description' => [
                    'id' => 'Digunakan sebagai bahan baku penting untuk berbagai industri, termasuk semen, kaca, keramik, sandblasting, dan pengolahan air.',
                    'en' => 'Used as important raw material for various industries, including cement, glass, ceramics, sandblasting, and water treatment.',
                ],
                'alt' => [
                    'id' => 'Pasir Silika',
                    'en' => 'Silica Sand',
                ],
            ],
            'product9' => [
                'category' => 'rock',
                'title' => [
                    'id' => 'Pasir Sungai',
                    'en' => 'River Sand',
                ],
                'description' => [
                    'id' => 'Digunakan dalam pekerjaan plesteran dan campuran beton.',
                    'en' => 'Used in plastering work and concrete mixture.',
                ],
                'alt' => [
                    'id' => 'Pasir Sungai',
                    'en' => 'River Sand',
                ],
            ],
            'product10' => [
                'category' => 'special',
                'title' => [
                    'id' => 'Gravel Silika',
                    'en' => 'Silica Gravel',
                ],
                'description' => [
                    'id' => 'Digunakan sebagai media penyaring, media pendukung dalam sistem filtrasi, dan bahan dalam berbagai proses industri.',
                    'en' => 'Used as filtering media, support media in filtration systems, and materials in various industrial processes.',
                ],
                'alt' => [
                    'id' => 'Gravel Silika',
                    'en' => 'Silica Gravel',
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
        return view('livewire.landing-page.components.produk.list-product');
    }
}

<?php

namespace App\Livewire\LandingPage\Components\Beranda;

use Livewire\Component;
use Livewire\Attributes\On;

class KenapaKami extends Component
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
                'id' => 'Dipercaya Sejak 2022',
                'en' => 'Trusted Since 2022',
            ],
            'heading' => [
                'id' => 'Perusahaan dengan Legalitas Resmi',
                'en' => 'Company with Official Legality',
            ],
            'headingAccent' => [
                'id' => '& Armada Lengkap',
                'en' => '& Complete Fleet',
            ],
            'description' => [
                'id' => 'Didirikan berdasarkan hukum Negara Republik Indonesia dengan komitmen memberikan layanan terbaik',
                'en' => 'Established under the laws of the Republic of Indonesia with a commitment to providing the best service',
            ],
            'stats' => [
                [
                    'value' => '23+',
                    'label' => [
                        'id' => 'Unit Armada',
                        'en' => 'Fleet Units',
                    ],
                ],
                [
                    'value' => '2023',
                    'label' => [
                        'id' => 'IPP Resmi',
                        'en' => 'Official IPP',
                    ],
                ],
            ],
            'features' => [
                [
                    'icon' => 'o-shield-check',
                    'iconBg' => 'primary',
                    'title' => [
                        'id' => 'Legalitas Resmi & Terpercaya',
                        'en' => 'Official & Trusted Legality',
                    ],
                    'description' => [
                        'id' => 'Memiliki Izin Pengangkutan dan Penjualan Komoditas Batuan (IPP) dengan SK No. 230822004081700001 tertanggal 14 Februari 2023',
                        'en' => 'Having a Transportation and Sales Permit for Stone Commodities (IPP) with Decree No. 230822004081700001 dated February 14, 2023',
                    ],
                    'badge' => [
                        'id' => 'Terdaftar Resmi KBLI 46634',
                        'en' => 'Officially Registered KBLI 46634',
                    ],
                ],
                [
                    'icon' => 'o-truck',
                    'iconBg' => 'secondary',
                    'title' => [
                        'id' => 'Armada Lengkap & Modern',
                        'en' => 'Complete & Modern Fleet',
                    ],
                    'description' => [
                        'id' => 'Didukung peralatan operasional yang lengkap dan terawat untuk menunjang setiap proyek',
                        'en' => 'Supported by complete and well-maintained operational equipment to support every project',
                    ],
                    'items' => [
                        [
                            'id' => '2 Unit Excavator',
                            'en' => '2 Excavator Units',
                        ],
                        [
                            'id' => '9 Unit Truck',
                            'en' => '9 Truck Units',
                        ],
                        [
                            'id' => '2 Unit Crusher',
                            'en' => '2 Crusher Units',
                        ],
                        [
                            'id' => '10 Kendaraan Ops',
                            'en' => '10 Operational Vehicles',
                        ],
                    ],
                ],
                [
                    'icon' => 'o-users',
                    'iconBg' => 'accent',
                    'title' => [
                        'id' => 'Tim Profesional',
                        'en' => 'Professional Team',
                    ],
                    'description' => [
                        'id' => 'Kegiatan usaha ditunjang dengan manajemen yang baik dan karyawan yang berpengalaman di bidangnya',
                        'en' => 'Business activities are supported by good management and experienced employees in their fields',
                    ],
                ],
            ],
            'cta' => [
                'id' => 'Kenali Kami Lebih Dekat',
                'en' => 'Get to Know Us Better',
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
        return view('livewire.landing-page.components.beranda.kenapa-kami');
    }
}

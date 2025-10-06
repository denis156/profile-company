<?php

namespace App\Livewire\LandingPage\Components\Tentang;

use Livewire\Component;
use Livewire\Attributes\On;

class Story extends Component
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
                'id' => 'Perjalanan Kami',
                'en' => 'Our Journey',
            ],
            'heading' => [
                'id' => 'Dari Visi Menjadi',
                'en' => 'From Vision to',
            ],
            'headingAccent' => [
                'id' => 'Kenyataan',
                'en' => 'Reality',
            ],
            'paragraphs' => [
                [
                    'id' => 'PT. Fathiyah Nugraha Group didirikan pada tanggal 22 Agustus 2022 dengan visi menjadi perusahaan terpercaya di bidang perdagangan batuan dan pasir, distributor semen, dan jasa perkapalan.',
                    'en' => 'PT. Fathiyah Nugraha Group was established on August 22, 2022 with a vision to become a trusted company in the field of stone and sand trading, cement distribution, and shipping services.',
                ],
                [
                    'id' => 'Pada 14 Februari 2023, kami memperoleh Izin Pengangkutan dan Penjualan Komoditas Batuan (IPP) dengan SK No. 230822004081700001, menandai tonggak penting dalam legalitas dan kredibilitas perusahaan.',
                    'en' => 'On February 14, 2023, we obtained the Transportation and Sales Permit for Stone Commodities (IPP) with Decree No. 230822004081700001, marking an important milestone in the company\'s legality and credibility.',
                ],
                [
                    'id' => 'Berlokasi strategis di Kendari, Sulawesi Tenggara, kami terus berkembang dengan dukungan 23+ unit armada modern dan tim profesional yang berpengalaman.',
                    'en' => 'Strategically located in Kendari, Southeast Sulawesi, we continue to grow with the support of 23+ modern fleet units and an experienced professional team.',
                ],
            ],
            'timeline' => [
                [
                    'icon' => 'o-rocket-launch',
                    'iconBg' => 'primary',
                    'title' => [
                        'id' => '22 Agustus 2022 - Pendirian',
                        'en' => 'August 22, 2022 - Establishment',
                    ],
                    'subtitle' => [
                        'id' => 'Awal perjalanan bisnis perdagangan dan perkapalan',
                        'en' => 'Beginning of trading and shipping business journey',
                    ],
                ],
                [
                    'icon' => 'o-shield-check',
                    'iconBg' => 'accent',
                    'title' => [
                        'id' => '14 Februari 2023 - Sertifikasi IPP',
                        'en' => 'February 14, 2023 - IPP Certification',
                    ],
                    'subtitle' => [
                        'id' => 'Legalitas resmi perdagangan batuan',
                        'en' => 'Official stone trading legality',
                    ],
                ],
            ],
            'floatingCard' => [
                'value' => '3+',
                'title' => [
                    'id' => 'Tahun Pengalaman',
                    'en' => 'Years of Experience',
                ],
                'subtitle' => [
                    'id' => 'Melayani dengan dedikasi',
                    'en' => 'Serving with dedication',
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
        return view('livewire.landing-page.components.tentang.story');
    }
}

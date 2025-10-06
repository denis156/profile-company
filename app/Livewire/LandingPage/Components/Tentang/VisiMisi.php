<?php

namespace App\Livewire\LandingPage\Components\Tentang;

use Livewire\Component;
use Livewire\Attributes\On;

class VisiMisi extends Component
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
                'id' => 'Komitmen Kami',
                'en' => 'Our Commitment',
            ],
            'heading' => [
                'id' => 'Visi & Misi',
                'en' => 'Vision & Mission',
            ],
            'vision' => [
                'title' => [
                    'id' => 'Visi',
                    'en' => 'Vision',
                ],
                'content' => [
                    'id' => 'Menjadi perusahaan terpercaya dan terdepan dalam menyediakan solusi terpadu di bidang perdagangan batuan dan pasir, distributor semen, dan jasa perkapalan yang memberikan nilai tambah bagi seluruh stakeholder.',
                    'en' => 'To become a trusted and leading company in providing integrated solutions in the field of stone and sand trading, cement distribution, and shipping services that provide added value for all stakeholders.',
                ],
            ],
            'mission' => [
                'title' => [
                    'id' => 'Misi',
                    'en' => 'Mission',
                ],
                'items' => [
                    [
                        'id' => 'Memberikan layanan berkualitas tinggi dengan profesionalisme dan integritas',
                        'en' => 'Providing high-quality services with professionalism and integrity',
                    ],
                    [
                        'id' => 'Mengutamakan kepuasan pelanggan melalui solusi inovatif dan efisien',
                        'en' => 'Prioritizing customer satisfaction through innovative and efficient solutions',
                    ],
                    [
                        'id' => 'Membangun kemitraan jangka panjang yang saling menguntungkan',
                        'en' => 'Building mutually beneficial long-term partnerships',
                    ],
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
        return view('livewire.landing-page.components.tentang.visi-misi');
    }
}

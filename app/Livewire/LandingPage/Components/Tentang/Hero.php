<?php

namespace App\Livewire\LandingPage\Components\Tentang;

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
                'id' => 'Profil Perusahaan',
                'en' => 'Company Profile',
            ],
            'heading' => [
                'id' => 'Mengenal Lebih Dekat',
                'en' => 'Get to Know',
            ],
            'company' => 'PT. Fathiyah Nugraha Group',
            'description' => [
                'id' => 'Perusahaan yang didirikan berdasarkan hukum Negara Republik Indonesia dengan komitmen memberikan layanan terbaik di bidang konstruksi dan perdagangan material batuan',
                'en' => 'A company established under the laws of the Republic of Indonesia with a commitment to providing the best services in construction and stone material trading',
            ],
            'stats' => [
                [
                    'value' => '2022',
                    'label' => [
                        'id' => 'Tahun Berdiri',
                        'en' => 'Year Established',
                    ],
                ],
                [
                    'value' => '2023',
                    'label' => [
                        'id' => 'IPP Resmi',
                        'en' => 'Official IPP',
                    ],
                ],
                [
                    'value' => '23+',
                    'label' => [
                        'id' => 'Unit Armada',
                        'en' => 'Fleet Units',
                    ],
                ],
                [
                    'value' => '100%',
                    'label' => [
                        'id' => 'Berkomitmen',
                        'en' => 'Committed',
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
        return view('livewire.landing-page.components.tentang.hero');
    }
}

<?php

namespace App\Livewire\LandingPage\Components\Tentang;

use Livewire\Component;
use Livewire\Attributes\On;

class Management extends Component
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
                'id' => 'Struktur Organisasi',
                'en' => 'Organizational Structure',
            ],
            'heading' => [
                'id' => 'Management & Organisasi',
                'en' => 'Management & Organization',
            ],
            'headingAccent' => [
                'id' => 'Perusahaan',
                'en' => 'Company',
            ],
            'description' => [
                'id' => 'PT. Fathiyah Nugraha Group dikelola oleh Komisaris Utama dan Seorang Direktur Utama, dibantu oleh seorang Manager Operasional dan beberapa Divisi',
                'en' => 'PT. Fathiyah Nugraha Group is managed by the Main Commissioner and a President Director, assisted by an Operational Manager and several Divisions',
            ],
            'positions' => [
                [
                    'title' => [
                        'id' => 'Komisioner',
                        'en' => 'Commissioner',
                    ],
                    'name' => 'Eka Pratiwi Herianto S.TP',
                    'icon' => 'o-user-circle',
                    'color' => 'primary',
                ],
                [
                    'title' => [
                        'id' => 'Direktur Utama',
                        'en' => 'President Director',
                    ],
                    'name' => 'Sahdan Laibu, SE',
                    'icon' => 'o-user-circle',
                    'color' => 'accent',
                ],
                [
                    'title' => [
                        'id' => 'Direktur Operasional',
                        'en' => 'Operational Director',
                    ],
                    'name' => 'Yudi Hermawan S.Ab',
                    'icon' => 'o-user-circle',
                    'color' => 'secondary',
                ],
                [
                    'title' => 'Legal',
                    'name' => 'Lilik Asron SH',
                    'icon' => 'o-scale',
                    'color' => 'primary',
                ],
                [
                    'title' => [
                        'id' => 'HR Financial',
                        'en' => 'HR Financial',
                    ],
                    'name' => 'Eka Pratiwi Herianto S.TP',
                    'icon' => 'o-banknotes',
                    'color' => 'accent',
                ],
                [
                    'title' => [
                        'id' => 'Manager Accounting',
                        'en' => 'Manager Accounting',
                    ],
                    'name' => 'Atma S.Sos',
                    'icon' => 'o-calculator',
                    'color' => 'secondary',
                ],
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
        return view('livewire.landing-page.components.tentang.management');
    }
}

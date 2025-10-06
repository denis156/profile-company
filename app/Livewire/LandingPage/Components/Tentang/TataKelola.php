<?php

namespace App\Livewire\LandingPage\Components\Tentang;

use Livewire\Component;
use Livewire\Attributes\On;

class TataKelola extends Component
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
                'id' => 'Good Corporate Governance',
                'en' => 'Good Corporate Governance',
            ],
            'heading' => [
                'id' => 'Tata Kelola',
                'en' => 'Corporate',
            ],
            'headingAccent' => [
                'id' => 'Perusahaan',
                'en' => 'Governance',
            ],
            'paragraph1' => [
                'id' => 'PT. FATHIYAH NUGRAHA GROUP memiliki landasan dan komitmen yang kuat untuk bisa menjalankan tatkelola perusahaan secara baik yang tercermin pada penerapan',
                'en' => 'PT. FATHIYAH NUGRAHA GROUP has a strong foundation and commitment to implementing good corporate governance, reflected in the application of',
            ],
            'sop' => [
                'id' => 'Sistem Operasional Prosedur yang berlaku (SOP)',
                'en' => 'Standard Operating Procedures (SOP)',
            ],
            'paragraph2' => [
                'id' => 'Dengan menjalankan tata kelola perusahaan yang baik, Perusahaan memiliki kemampuan untuk menciptakan kinerja yang unggul dan menambah nilai (ekonomi) bagi pemegang saham dan stakeholders, sekaligus beroperasi dengan mentaati disiplin aturan dan etika bisnis perusahaan Sesuai ketentuan / perangkat hukum yang berlaku.',
                'en' => 'By implementing good corporate governance, the Company has the ability to create superior performance and add economic value for shareholders and stakeholders, while operating in compliance with business rules and ethics according to applicable legal provisions.',
            ],
            'principlesHeading' => [
                'id' => 'Prinsip Tata Kelola',
                'en' => 'Governance Principles',
            ],
            'principles' => [
                [
                    'title' => 'Accountability',
                    'description' => [
                        'id' => 'Akuntabilitas dalam setiap tindakan',
                        'en' => 'Accountability in every action',
                    ],
                    'color' => 'primary',
                ],
                [
                    'title' => 'Responsibility',
                    'description' => [
                        'id' => 'Bertanggung jawab kepada stakeholder',
                        'en' => 'Responsible to stakeholders',
                    ],
                    'color' => 'secondary',
                ],
                [
                    'title' => 'Fairness',
                    'description' => [
                        'id' => 'Adil dan setara untuk semua pihak',
                        'en' => 'Fair and equal for all parties',
                    ],
                    'color' => 'accent',
                ],
                [
                    'title' => 'Transparency',
                    'description' => [
                        'id' => 'Transparan dalam operasional',
                        'en' => 'Transparent in operations',
                    ],
                    'color' => 'primary',
                ],
                [
                    'title' => 'Independency',
                    'description' => [
                        'id' => 'Independen dalam pengambilan keputusan',
                        'en' => 'Independent in decision making',
                    ],
                    'color' => 'secondary',
                ],
            ],
            'imageAlt' => [
                'id' => 'Tata Kelola Perusahaan',
                'en' => 'Corporate Governance',
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
        return view('livewire.landing-page.components.tentang.tata-kelola');
    }
}

<?php

namespace App\Livewire\LandingPage\Components\Layanan;

use Livewire\Component;
use Livewire\Attributes\On;

class WorkFlow extends Component
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
                'id' => 'Cara Kerja',
                'en' => 'How It Works',
            ],
            'heading1' => [
                'id' => 'Proses Kerja yang',
                'en' => 'Structured Work',
            ],
            'heading2' => [
                'id' => 'Terstruktur',
                'en' => 'Process',
            ],
            'description' => [
                'id' => 'Kami mengikuti proses kerja profesional untuk memastikan setiap proyek berjalan lancar',
                'en' => 'We follow a professional work process to ensure every project runs smoothly',
            ],
            'step1Title' => [
                'id' => 'Konsultasi',
                'en' => 'Consultation',
            ],
            'step1Desc' => [
                'id' => 'Diskusi kebutuhan dan analisis proyek Anda',
                'en' => 'Discussion of your needs and project analysis',
            ],
            'step2Title' => [
                'id' => 'Perencanaan',
                'en' => 'Planning',
            ],
            'step2Desc' => [
                'id' => 'Penyusunan proposal dan timeline detail',
                'en' => 'Preparation of proposal and detailed timeline',
            ],
            'step3Title' => [
                'id' => 'Eksekusi',
                'en' => 'Execution',
            ],
            'step3Desc' => [
                'id' => 'Pelaksanaan proyek dengan monitoring ketat',
                'en' => 'Project implementation with strict monitoring',
            ],
            'step4Title' => [
                'id' => 'Selesai',
                'en' => 'Completed',
            ],
            'step4Desc' => [
                'id' => 'Penyerahan dan evaluasi hasil proyek',
                'en' => 'Handover and project result evaluation',
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
        return view('livewire.landing-page.components.layanan.work-flow');
    }
}

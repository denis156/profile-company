<?php

namespace App\Livewire\LandingPage\Components\Tentang;

use Livewire\Component;
use Livewire\Attributes\On;

class Sertifikat extends Component
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
                'id' => 'Verifikasi & Sertifikasi',
                'en' => 'Verification & Certification'
            ],
            'heading_part1' => [
                'id' => 'Sertifikat',
                'en' => 'Product'
            ],
            'heading_part2' => [
                'id' => 'Kualitas Produk',
                'en' => 'Quality Certificates'
            ],
            'description' => [
                'id' => 'Produk kami telah diuji dan tersertifikasi oleh laboratorium independen',
                'en' => 'Our products have been tested and certified by independent laboratories'
            ],
            'lab_report' => [
                'id' => 'Lab Report',
                'en' => 'Lab Report'
            ],
            'sample_label' => [
                'id' => 'Sample:',
                'en' => 'Sample:'
            ],
            'number_label' => [
                'id' => 'No:',
                'en' => 'No:'
            ],
            'date_label' => [
                'id' => 'Date:',
                'en' => 'Date:'
            ],
            'method_label' => [
                'id' => 'Method:',
                'en' => 'Method:'
            ],
            'sample_analyzed' => [
                'id' => 'Sample (s) Analyzed',
                'en' => 'Sample (s) Analyzed'
            ],
            'report1_sample' => [
                'id' => 'Raw Samples',
                'en' => 'Raw Samples'
            ],
            'report2_sample' => [
                'id' => 'Pasir Sungai',
                'en' => 'River Sand'
            ]
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
        return view('livewire.landing-page.components.tentang.sertifikat');
    }
}

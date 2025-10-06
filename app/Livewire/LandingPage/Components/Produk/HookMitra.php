<?php

namespace App\Livewire\LandingPage\Components\Produk;

use Livewire\Attributes\On;
use Livewire\Component;

class HookMitra extends Component
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
                'id' => 'Kepercayaan Klien',
                'en' => 'Client Trust',
            ],
            'heading' => [
                'id' => 'Mitra & Klien Kami',
                'en' => 'Our Partners & Clients',
            ],
            'description' => [
                'id' => 'Dipercaya oleh berbagai perusahaan dan institusi untuk proyek konstruksi dan penyediaan material',
                'en' => 'Trusted by various companies and institutions for construction projects and material supply',
            ],
            'category1_badge' => [
                'id' => 'Pertambangan',
                'en' => 'Mining',
            ],
            'category1_title' => [
                'id' => 'Industri Nikel',
                'en' => 'Nickel Industry',
            ],
            'category1_desc' => [
                'id' => 'Mitra strategis dari perusahaan pertambangan nikel terkemuka di Indonesia',
                'en' => 'Strategic partners with leading nickel mining companies in Indonesia',
            ],
            'category2_badge' => [
                'id' => 'Mining & Trading',
                'en' => 'Mining & Trading',
            ],
            'category2_title' => [
                'id' => 'Stone Mining',
                'en' => 'Stone Mining',
            ],
            'category2_desc' => [
                'id' => 'Kerjasama dengan perusahaan stone mining dan trading material tambang',
                'en' => 'Collaboration with stone mining and mining material trading companies',
            ],
            'category3_badge' => [
                'id' => 'Konstruksi',
                'en' => 'Construction',
            ],
            'category3_title' => [
                'id' => 'Perusahaan Konstruksi',
                'en' => 'Construction Companies',
            ],
            'category3_desc' => [
                'id' => 'Dipercaya oleh kontraktor dan perusahaan konstruksi untuk supply material',
                'en' => 'Trusted by contractors and construction companies for material supply',
            ],
            'cta_button' => [
                'id' => 'Lihat Semua Mitra',
                'en' => 'View All Partners',
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
        return view('livewire.landing-page.components.produk.hook-mitra');
    }
}

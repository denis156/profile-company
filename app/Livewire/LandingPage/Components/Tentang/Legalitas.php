<?php

namespace App\Livewire\LandingPage\Components\Tentang;

use Livewire\Component;
use Livewire\Attributes\On;

class Legalitas extends Component
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
                'id' => 'Dokumen Resmi',
                'en' => 'Official Documents',
            ],
            'heading' => [
                'id' => 'Legalitas',
                'en' => 'Legality',
            ],
            'headingAccent' => [
                'id' => 'Perusahaan',
                'en' => 'Company',
            ],
            'description' => [
                'id' => 'Terdaftar resmi dan memiliki kelengkapan dokumen legalitas sesuai peraturan yang berlaku',
                'en' => 'Officially registered and has complete legality documents in accordance with applicable regulations',
            ],
            'documents' => [
                [
                    'icon' => 'o-document-text',
                    'color' => 'primary',
                    'title' => [
                        'id' => 'Akta Pendirian',
                        'en' => 'Deed of Establishment',
                    ],
                    'details' => [
                        [
                            'label' => [
                                'id' => 'Nomor',
                                'en' => 'Number',
                            ],
                            'value' => '110',
                        ],
                        [
                            'label' => [
                                'id' => 'Notaris',
                                'en' => 'Notary',
                            ],
                            'value' => 'RIOVINO MOSCANI, Sarjana Hukum, Magister Kenotariatan',
                        ],
                        [
                            'label' => [
                                'id' => 'Tanggal',
                                'en' => 'Date',
                            ],
                            'value' => [
                                'id' => '22 Agustus 2022',
                                'en' => 'August 22, 2022',
                            ],
                        ],
                    ],
                ],
                [
                    'icon' => 'o-identification',
                    'color' => 'secondary',
                    'title' => 'NIB',
                    'details' => [
                        [
                            'label' => [
                                'id' => 'Nomor Induk Berusaha',
                                'en' => 'Business Identification Number',
                            ],
                            'value' => '2308220040817',
                            'highlight' => true,
                        ],
                    ],
                ],
                [
                    'icon' => 'o-receipt-percent',
                    'color' => 'accent',
                    'title' => 'NPWP',
                    'details' => [
                        [
                            'label' => [
                                'id' => 'Nomor Pokok Wajib Pajak',
                                'en' => 'Taxpayer Identification Number',
                            ],
                            'value' => '60.738.336.1-811.000',
                            'highlight' => true,
                        ],
                        [
                            'label' => '',
                            'value' => 'a.n PT. FATHIYAH NUGRAHA GROUP',
                        ],
                    ],
                ],
                [
                    'icon' => 'o-check-badge',
                    'color' => 'primary',
                    'title' => 'PKP',
                    'details' => [
                        [
                            'label' => [
                                'id' => 'Pengusaha Kena Pajak',
                                'en' => 'Taxable Entrepreneur',
                            ],
                            'value' => 'S-373PK/WPJ.15/KP.0503/2022',
                            'highlight' => true,
                        ],
                    ],
                ],
                [
                    'icon' => 'o-shield-check',
                    'color' => 'secondary',
                    'title' => [
                        'id' => 'IUP OPK Penjualan & Pengangkutan',
                        'en' => 'IUP OPK Sales & Transportation',
                    ],
                    'span' => 'md:col-span-2',
                    'details' => [
                        [
                            'label' => [
                                'id' => 'Izin Usaha Pertambangan',
                                'en' => 'Mining Business License',
                            ],
                            'value' => '313/1/IUP/PMDN/2022',
                            'highlight' => true,
                        ],
                        [
                            'label' => [
                                'id' => 'Tanggal Terbit',
                                'en' => 'Issue Date',
                            ],
                            'value' => [
                                'id' => '14 Februari 2023',
                                'en' => 'February 14, 2023',
                            ],
                            'highlight' => true,
                        ],
                    ],
                    'badge' => 'KBLI 46634',
                    'badgeText' => [
                        'id' => 'Perdagangan Besar Komoditas Batuan',
                        'en' => 'Wholesale Trade of Stone Commodities',
                    ],
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
        return view('livewire.landing-page.components.tentang.legalitas');
    }
}

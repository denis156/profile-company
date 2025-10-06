<?php

namespace App\Livewire\LandingPage\Components;

use Livewire\Component;

class Navbar extends Component
{
    public $isEnglish = true;

    public $currentRoute;

    public $menuItems = [];

    public function mount()
    {
        $this->currentRoute = request()->route()->getName();

        // Load bahasa dari session, default English
        $this->isEnglish = session('language', 'en') === 'en';

        $this->loadMenuItems();
    }

    public function loadMenuItems()
    {
        $this->menuItems = [
            [
                'route' => 'beranda',
                'label' => [
                    'id' => 'Beranda',
                    'en' => 'Home',
                ],
            ],
            [
                'route' => 'tentang-kami',
                'label' => [
                    'id' => 'Tentang Kami',
                    'en' => 'About Us',
                ],
            ],
            [
                'route' => 'layanan',
                'label' => [
                    'id' => 'Layanan',
                    'en' => 'Services',
                ],
            ],
            [
                'route' => 'produk',
                'label' => [
                    'id' => 'Produk',
                    'en' => 'Products',
                ],
            ],
            [
                'route' => 'mitra',
                'label' => [
                    'id' => 'Mitra',
                    'en' => 'Partners',
                ],
            ],
            [
                'route' => 'galeri',
                'label' => [
                    'id' => 'Galeri',
                    'en' => 'Gallery',
                ],
            ],
            [
                'route' => 'kontak',
                'label' => [
                    'id' => 'Kontak',
                    'en' => 'Contact',
                ],
            ],
        ];
    }

    public function updatedIsEnglish($value)
    {
        // Simpan pilihan bahasa ke session (true = English, false = Indonesia)
        session(['language' => $value ? 'en' : 'id']);

        // Reload menu items saat bahasa berubah
        $this->loadMenuItems();

        // Dispatch event ke komponen lain untuk update bahasa
        $this->dispatch('language-changed', language: $value ? 'en' : 'id');
    }

    public function getLabel($item)
    {
        return $this->isEnglish ? $item['label']['en'] : $item['label']['id'];
    }

    public function render()
    {
        return view('livewire.landing-page.components.navbar');
    }
}

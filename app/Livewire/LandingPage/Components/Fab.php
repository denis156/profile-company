<?php

namespace App\Livewire\LandingPage\Components;

use Livewire\Component;

class Fab extends Component
{
    public string $email = 'pt.fathiyahnugrahagroup@gmail.com';

    public string $whatsappNumber = '6285240696956';

    public string $whatsappMessage = 'Halo PT. Fathiyah Nugraha Group, saya ingin bertanya tentang layanan Anda';

    /**
     * Get mailto link
     */
    public function getMailtoLinkProperty(): string
    {
        return 'mailto:' . $this->email;
    }

    /**
     * Get WhatsApp link with pre-filled message
     */
    public function getWhatsappLinkProperty(): string
    {
        $encodedMessage = urlencode($this->whatsappMessage);

        return "https://wa.me/{$this->whatsappNumber}?text={$encodedMessage}";
    }

    /**
     * Open email client
     */
    public function openEmail(): void
    {
        $this->dispatch('open-url', url: $this->mailtoLink);
    }

    /**
     * Open WhatsApp
     */
    public function openWhatsapp(): void
    {
        $this->dispatch('open-url', url: $this->whatsappLink);
    }

    public function render()
    {
        return view('livewire.landing-page.components.fab');
    }
}

{{-- Footer dengan info perusahaan, quick links, kontak, dan social media --}}
<footer class="bg-base-200 border-t border-base-300">
    {{-- Main Footer Content --}}
    <div class="container mx-auto max-w-7xl px-6 lg:px-8 py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">

            {{-- Company Info --}}
            <div class="space-y-6">
                <div class="flex items-center gap-3">
                    <div class="w-16 h-16 rounded-lg overflow-hidden flex items-center justify-center">
                        <img src="{{ asset('image/fng_logo.svg') }}" alt="FNG Logo" class="w-full h-full object-contain">
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-primary">PT. FNG</h3>
                        <p class="text-xs text-base-content/60 leading-tight">Fathiyah Nugraha Group</p>
                    </div>
                </div>
                <p class="text-sm leading-relaxed text-base-content/80">
                    Perusahaan terpercaya di bidang perdagangan batuan dan pasir, distributor semen, dan jasa perkapalan.
                    Memberikan solusi terbaik untuk kebutuhan bisnis Anda.
                </p>
            </div>

            {{-- Quick Links --}}
            <div>
                <h4 class="text-base font-semibold text-base-content mb-6">Navigasi</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('beranda') }}" wire:navigate
                           class="text-sm text-base-content/70 hover:text-primary transition-colors">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tentang-kami') }}" wire:navigate
                           class="text-sm text-base-content/70 hover:text-primary transition-colors">
                            Tentang Kami
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('layanan') }}" wire:navigate
                           class="text-sm text-base-content/70 hover:text-primary transition-colors">
                            Layanan
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('produk') }}" wire:navigate
                           class="text-sm text-base-content/70 hover:text-primary transition-colors">
                            Produk
                        </a>
                    </li>
                </ul>
            </div>

            {{-- More Links --}}
            <div>
                <h4 class="text-base font-semibold text-base-content mb-6">Informasi</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('mitra') }}" wire:navigate
                           class="text-sm text-base-content/70 hover:text-primary transition-colors">
                            Mitra
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('galeri') }}" wire:navigate
                           class="text-sm text-base-content/70 hover:text-primary transition-colors">
                            Galeri
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('kontak') }}" wire:navigate
                           class="text-sm text-base-content/70 hover:text-primary transition-colors">
                            Kontak
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Contact Info --}}
            <div>
                <h4 class="text-base font-semibold text-base-content mb-6">Hubungi Kami</h4>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <x-icon name="o-map-pin" class="h-5 text-primary flex-shrink-0 mt-0.5" />
                        <span class="text-sm text-base-content/80 leading-relaxed">
                            Jl. Lawata Kompleks Ruko Lawata No 20. Tobuuha, Kec Puuwatu Kota Kendari Sulawesi Tenggara 93111
                        </span>
                    </li>
                    <li class="flex items-center gap-3">
                        <x-icon name="o-phone" class="h-5 text-primary flex-shrink-0" />
                        <a href="tel:+6285240696956"
                           class="text-sm text-base-content/80 hover:text-primary transition-colors">
                            +62 852-4069-6956 an. Yudi Hermawan S.ab
                        </a>
                    </li>
                    <li class="flex items-center gap-3">
                        <x-icon name="o-envelope" class="h-5 text-primary flex-shrink-0" />
                        <a href="mailto:pt.fathiyahnugrahagroup@gmail.com"
                           class="text-sm text-base-content/80 hover:text-primary transition-colors">
                            pt.fathiyahnugrahagroup@gmail.com
                        </a>
                    </li>
                </ul>

                {{-- Social Media --}}
                <div class="mt-6">
                    <div class="flex items-center gap-3">
                        <a href="#" class="btn btn-circle btn-sm btn-ghost hover:btn-primary" aria-label="Facebook">
                            <x-icon name="fab.facebook" class="h-5" />
                        </a>
                        <a href="#" class="btn btn-circle btn-sm btn-ghost hover:btn-primary" aria-label="Instagram">
                            <x-icon name="fab.instagram" class="h-5" />
                        </a>
                        <a href="#" class="btn btn-circle btn-sm btn-ghost hover:btn-primary" aria-label="LinkedIn">
                            <x-icon name="fab.linkedin" class="h-5" />
                        </a>
                        <a href="#" class="btn btn-circle btn-sm btn-ghost hover:btn-primary" aria-label="WhatsApp">
                            <x-icon name="fab.whatsapp" class="h-5" />
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Copyright Bar --}}
    <div class="bg-base-300/50 border-t border-base-300">
        <div class="container mx-auto max-w-7xl px-6 lg:px-8 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-sm text-base-content/60 text-center md:text-left">
                    &copy; {{ date('Y') }} PT. Fathiyah Nugraha Group. All rights reserved.
                </p>
                <div class="flex items-center gap-2 text-sm text-base-content/60">
                    <span>Developed by</span>
                    <a href="https://github.com/denis156" target="_blank" rel="noopener noreferrer"
                       class="font-semibold text-primary hover:text-primary/80 transition-colors">
                        Denis Djodian Ardika
                    </a>
                    <span>•</span>
                    <a href="#" target="_blank" rel="noopener noreferrer"
                       class="font-semibold text-primary hover:text-primary/80 transition-colors">
                        Main System
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

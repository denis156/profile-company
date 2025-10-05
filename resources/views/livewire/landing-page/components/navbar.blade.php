{{-- Navbar dengan sticky position, backdrop blur, dan responsive design --}}
<header class="fixed top-0 left-0 right-0 z-50 bg-base-100/80 backdrop-blur-md border-b border-base-300 shadow-sm">

    <nav class="navbar container mx-auto max-w-7xl px-6 lg:px-8">
        {{-- Navbar Start: Logo --}}
        <div class="navbar-start">
            <a href="{{ route('beranda') }}" wire:navigate class="flex items-center gap-3 transition-transform hover:scale-105">
                <div class="w-16 h-16 rounded-lg overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('image/fng_logo.svg') }}" alt="FNG Logo" class="w-full h-full object-contain">
                </div>
                <div class="hidden lg:block">
                    <span class="text-xl font-bold text-primary">PT. FNG</span>
                    <p class="text-xs text-base-content/60 leading-tight">Fathiyah Nugraha Group</p>
                </div>
            </a>
        </div>

        {{-- Navbar Center: Desktop Menu --}}
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1 gap-2">
                <li>
                    <a href="{{ route('beranda') }}" wire:navigate
                        class="text-base font-medium transition-colors {{ request()->routeIs('beranda') ? 'text-primary' : 'text-base-content/80 hover:text-primary' }}">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="{{ route('tentang-kami') }}" wire:navigate
                        class="text-base font-medium transition-colors {{ request()->routeIs('tentang-kami') ? 'text-primary' : 'text-base-content/80 hover:text-primary' }}">
                        Tentang Kami
                    </a>
                </li>
                <li>
                    <a href="{{ route('layanan') }}" wire:navigate
                        class="text-base font-medium transition-colors {{ request()->routeIs('layanan') ? 'text-primary' : 'text-base-content/80 hover:text-primary' }}">
                        Layanan
                    </a>
                </li>
                <li>
                    <a href="{{ route('produk') }}" wire:navigate
                        class="text-base font-medium transition-colors {{ request()->routeIs('produk') ? 'text-primary' : 'text-base-content/80 hover:text-primary' }}">
                        Produk
                    </a>
                </li>
                <li>
                    <a href="{{ route('mitra') }}" wire:navigate
                        class="text-base font-medium transition-colors {{ request()->routeIs('mitra') ? 'text-primary' : 'text-base-content/80 hover:text-primary' }}">
                        Mitra
                    </a>
                </li>
                <li>
                    <a href="{{ route('galeri') }}" wire:navigate
                        class="text-base font-medium transition-colors {{ request()->routeIs('galeri') ? 'text-primary' : 'text-base-content/80 hover:text-primary' }}">
                        Galeri
                    </a>
                </li>
            </ul>
        </div>

        {{-- Navbar End: CTA Button & Mobile Dropdown --}}
        <div class="navbar-end">
            {{-- CTA Button - Hidden on mobile, visible on tablet & desktop --}}
            <a href="{{ route('kontak') }}" wire:navigate class="hidden md:inline-flex btn btn-accent text-accent-content gap-2 px-6">
                <x-icon name="o-envelope" class="h-5" />
                Hubungi Kami
            </a>

            {{-- Mobile Dropdown Menu - Only visible on mobile --}}
            <div class="dropdown dropdown-end md:hidden">
                <div tabindex="0" role="button" class="btn btn-ghost btn-square">
                    <x-icon name="o-bars-3" class="h-6" />
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-56 p-2 shadow-lg">
                    <li>
                        <a href="{{ route('beranda') }}" wire:navigate class="{{ request()->routeIs('beranda') ? 'text-primary' : '' }}">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tentang-kami') }}" wire:navigate class="{{ request()->routeIs('tentang-kami') ? 'text-primary' : '' }}">
                            Tentang Kami
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('layanan') }}" wire:navigate class="{{ request()->routeIs('layanan') ? 'text-primary' : '' }}">
                            Layanan
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('produk') }}" wire:navigate class="{{ request()->routeIs('produk') ? 'text-primary' : '' }}">
                            Produk
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('mitra') }}" wire:navigate class="{{ request()->routeIs('mitra') ? 'text-primary' : '' }}">
                            Mitra
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('galeri') }}" wire:navigate class="{{ request()->routeIs('galeri') ? 'text-primary' : '' }}">
                            Galeri
                        </a>
                    </li>
                    <li class="border-t border-base-300 mt-2 pt-2">
                        <a href="{{ route('kontak') }}" wire:navigate class="btn btn-accent btn-sm text-accent-content gap-2 w-full">
                            <x-icon name="o-envelope" class="h-4" />
                            Hubungi Kami
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

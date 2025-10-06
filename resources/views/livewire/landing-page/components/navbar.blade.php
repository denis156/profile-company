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
                @foreach($menuItems as $item)
                    <li>
                        <x-button
                            label="{{ $this->getLabel($item) }}"
                            link="{{ route($item['route']) }}"
                            class="{{ $currentRoute === $item['route'] ? 'btn-primary' : 'btn-ghost btn-primary' }}"
                        />
                    </li>
                @endforeach
            </ul>
        </div>

        {{-- Navbar End: Language Swap & Mobile Dropdown --}}
        <div class="navbar-end gap-4">
            {{-- Language Swap - Hidden on mobile, visible on tablet & desktop --}}
            <div class="hidden md:block" x-data="{ loaded: false }" x-init="$nextTick(() => loaded = true)">
                <label class="swap btn btn-neutral cursor-pointer transition-opacity duration-200" :class="{ 'opacity-0': !loaded, 'opacity-100': loaded }">
                    <input type="checkbox" wire:model.live="isEnglish" @if($isEnglish) checked @endif />
                    <div class="swap-on"><x-icon name="o-language" /> English</div>
                    <div class="swap-off"><x-icon name="o-language" /> Indonesia</div>
                </label>
            </div>

            {{-- Mobile Dropdown Menu - Only visible on mobile --}}
            <div class="dropdown dropdown-end md:hidden">
                <div tabindex="0" role="button" class="btn btn-ghost btn-square">
                    <x-icon name="o-bars-3" class="h-6" />
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box border-1 border-primary z-[1] mt-3 w-56 p-2 shadow-sm shadow-primary">
                    @foreach($menuItems as $item)
                        <li class="mt-2">
                            <x-button
                                label="{{ $this->getLabel($item) }}"
                                link="{{ route($item['route']) }}"
                                class="btn-xs btn-block {{ $currentRoute === $item['route'] ? 'btn-primary' : 'btn-ghost btn-primary' }}"
                            />
                        </li>
                    @endforeach
                    <li class="border-t border-base-300 mt-2 pt-2 flex justify-center" x-data="{ loaded: false }" x-init="$nextTick(() => loaded = true)">
                        <label class="swap btn btn-neutral btn-xs btn-block cursor-pointer transition-opacity duration-200" :class="{ 'opacity-0': !loaded, 'opacity-100': loaded }">
                            <input type="checkbox" wire:model.live="isEnglish" @if($isEnglish) checked @endif />
                            <div class="swap-on"><x-icon name="o-language" /> English</div>
                            <div class="swap-off"><x-icon name="o-language" /> Indonesia</div>
                        </label>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

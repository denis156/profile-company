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
                        <h3 class="text-lg font-bold text-primary">{{ $companyInfo['name'] }}</h3>
                        <p class="text-xs text-base-content/60 leading-tight">{{ $companyInfo['fullName'] }}</p>
                    </div>
                </div>
                <p class="text-sm leading-relaxed text-base-content/80">
                    {{ $this->getText($companyInfo['description']) }}
                </p>
            </div>

            {{-- Quick Links --}}
            <div>
                <h4 class="text-base font-semibold text-base-content mb-6">
                    {{ $isEnglish ? 'Navigation' : 'Navigasi' }}
                </h4>
                <ul class="space-y-3">
                    @foreach($navigationLinks as $link)
                        <li>
                            <a href="{{ route($link['route']) }}" wire:navigate
                               class="text-sm text-base-content/70 hover:text-primary transition-colors">
                                {{ $this->getLabel($link) }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- More Links --}}
            <div>
                <h4 class="text-base font-semibold text-base-content mb-6">
                    {{ $isEnglish ? 'Information' : 'Informasi' }}
                </h4>
                <ul class="space-y-3">
                    @foreach($informationLinks as $link)
                        <li>
                            <a href="{{ route($link['route']) }}" wire:navigate
                               class="text-sm text-base-content/70 hover:text-primary transition-colors">
                                {{ $this->getLabel($link) }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Contact Info --}}
            <div>
                <h4 class="text-base font-semibold text-base-content mb-6">
                    {{ $isEnglish ? 'Contact Us' : 'Hubungi Kami' }}
                </h4>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <x-icon name="o-map-pin" class="h-5 text-primary flex-shrink-0 mt-0.5" />
                        <span class="text-sm text-base-content/80 leading-relaxed">
                            {{ $contactInfo['address'] }}
                        </span>
                    </li>
                    <li class="flex items-center gap-3">
                        <x-icon name="o-phone" class="h-5 text-primary flex-shrink-0" />
                        <a href="tel:{{ $contactInfo['phoneLink'] }}"
                           class="text-sm text-base-content/80 hover:text-primary transition-colors">
                            {{ $contactInfo['phone'] }}
                        </a>
                    </li>
                    <li class="flex items-center gap-3">
                        <x-icon name="o-envelope" class="h-5 text-primary flex-shrink-0" />
                        <a href="mailto:{{ $contactInfo['email'] }}"
                           class="text-sm text-base-content/80 hover:text-primary transition-colors">
                            {{ $contactInfo['email'] }}
                        </a>
                    </li>
                </ul>

                {{-- Social Media --}}
                <div class="mt-6">
                    <div class="flex items-center gap-3">
                        @foreach($socialMedia as $social)
                            <a href="{{ $social['url'] }}"
                               class="btn btn-circle btn-sm btn-ghost hover:btn-primary"
                               aria-label="{{ $social['name'] }}">
                                <x-icon name="{{ $social['icon'] }}" class="h-5" />
                            </a>
                        @endforeach
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
                    &copy; {{ date('Y') }} {{ $copyright['company'] }}. {{ $this->getText($copyright['text']) }}.
                </p>
                <div class="flex items-center gap-2 text-sm text-base-content/60">
                    <span>{{ $this->getText($copyright['developedBy']) }}</span>
                    <a href="{{ $copyright['developer']['url'] }}" target="_blank" rel="noopener noreferrer"
                       class="font-semibold text-primary hover:text-primary/80 transition-colors">
                        {{ $copyright['developer']['name'] }}
                    </a>
                    <span>•</span>
                    <a href="{{ $copyright['mainSystem']['url'] }}" target="_blank" rel="noopener noreferrer"
                       class="font-semibold text-primary hover:text-primary/80 transition-colors">
                        {{ $copyright['mainSystem']['label'] }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

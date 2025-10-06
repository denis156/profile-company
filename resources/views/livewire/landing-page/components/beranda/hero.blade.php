<section class="relative min-h-screen flex items-center overflow-hidden bg-gradient-to-b from-base-100 to-base-200">
    {{-- Background Pattern --}}
    <livewire:landing-page.components.bg-pattren />

    {{-- Content --}}
    <div class="container mx-auto max-w-7xl px-6 lg:px-8 py-24 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            {{-- Hero Content --}}
            <div class="space-y-8" data-aos="fade-right">
                <div class="space-y-6">
                    <div class="inline-block">
                        <span class="badge badge-soft badge-primary badge-lg gap-2">
                            <div aria-label="status" class="status status-accent animate-pulse"></div>
                            {{ $this->getText($content['badge']) }}
                        </span>
                    </div>
                    <h1 class="text-5xl lg:text-6xl font-bold leading-tight text-base-content">
                        {{ $this->getText($content['heading']) }}
                        <span class="text-primary">{{ $this->getText($content['headingAccent']) }}</span>
                    </h1>
                    <p class="text-lg leading-relaxed text-base-content/80">
                        {{ $this->getText($content['description']) }}
                    </p>
                </div>

                {{-- CTA Buttons --}}
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="/kontak" wire:navigate class="btn btn-accent btn-lg gap-2 shadow-lg">
                        <x-icon name="o-envelope" class="h-6" />
                        {{ $this->getText($content['ctaContact']) }}
                    </a>
                    <a href="/tentang-kami" wire:navigate class="btn btn-outline btn-lg gap-2 border-2">
                        <x-icon name="o-information-circle" class="h-6" />
                        {{ $this->getText($content['ctaAbout']) }}
                    </a>
                </div>

                {{-- Stats --}}
                <div class="grid grid-cols-3 gap-6 pt-8">
                    @foreach($content['stats'] as $index => $stat)
                        <div class="text-center lg:text-left" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                            <div class="text-3xl lg:text-4xl font-bold text-primary">{{ $stat['value'] }}</div>
                            <div class="text-sm text-base-content/60">{{ $this->getText($stat['label']) }}</div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Hero Image Gallery --}}
            <div class="relative" data-aos="fade-left">
                {{-- Main Image --}}
                <div class="relative z-10">
                    <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('image/pic_1.jpeg') }}" class="w-full h-full object-cover" />
                    </div>
                </div>

                {{-- Floating Card 1: Bottom Left --}}
                <div class="absolute -bottom-6 -left-6 bg-base-100 rounded-xl shadow-2xl p-6 max-w-xs z-20"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-accent rounded-lg flex items-center justify-center flex-shrink-0">
                            <x-icon name="o-check-circle" class="h-6 text-accent-content" />
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-base-content">{{ $this->getText($content['floatingCard']['title']) }}</div>
                            <div class="text-xs text-base-content/60">{{ $this->getText($content['floatingCard']['subtitle']) }}</div>
                        </div>
                    </div>
                </div>

                {{-- Floating Card 2: Top Right --}}
                <div class="absolute -top-6 -right-6 w-48 h-48 rounded-xl overflow-hidden shadow-xl z-20 hidden lg:block"
                    data-aos="fade-down" data-aos-delay="400">
                    <img src="{{ asset('image/pic_2.jpeg') }}" class="w-full h-full object-cover" />
                </div>

                {{-- Decorative Element --}}
                <div class="absolute -bottom-12 -right-12 w-64 h-64 bg-primary/10 rounded-full blur-3xl -z-10">
                </div>
            </div>
        </div>
    </div>
</section>

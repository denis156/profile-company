<section class="relative min-h-screen flex items-center overflow-hidden bg-gradient-to-b from-base-100 to-base-200">
    {{-- Background Pattern --}}
    <livewire:landing-page.components.bg-pattren />

    <div class="container mx-auto max-w-7xl px-6 lg:px-8 py-24 relative z-10">
        <div class="max-w-4xl mx-auto text-center space-y-8">
            {{-- Title --}}
            <div class="space-y-6" data-aos="fade-up">
                <span class="badge badge-primary badge-lg">{{ $this->getText($content['badge']) }}</span>
                <h1 class="text-5xl lg:text-6xl font-bold text-base-content">
                    {{ $this->getText($content['heading']) }}
                    <p class="text-primary">{{ $this->getText($content['headingAccent']) }}</p>
                </h1>
                <p class="text-xl text-base-content/70 max-w-3xl mx-auto leading-relaxed">
                    {{ $this->getText($content['description']) }}
                </p>
            </div>

            {{-- Quick Stats --}}
            <div class="grid grid-cols-3 gap-4 md:gap-6 pt-8" data-aos="fade-up" data-aos-delay="200">
                <div class="space-y-1 md:space-y-2">
                    <div class="text-2xl md:text-4xl font-bold text-primary">10+</div>
                    <div class="text-xs md:text-sm text-base-content/60">{{ $this->getText($content['stat1Label']) }}</div>
                </div>
                <div class="space-y-1 md:space-y-2">
                    <div class="text-2xl md:text-4xl font-bold text-primary">100%</div>
                    <div class="text-xs md:text-sm text-base-content/60">{{ $this->getText($content['stat2Label']) }}</div>
                </div>
                <div class="space-y-1 md:space-y-2">
                    <div class="text-2xl md:text-4xl font-bold text-primary">IPP</div>
                    <div class="text-xs md:text-sm text-base-content/60">{{ $this->getText($content['stat3Label']) }}</div>
                </div>
            </div>
        </div>
    </div>
</section>

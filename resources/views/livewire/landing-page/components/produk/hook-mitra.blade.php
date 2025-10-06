<section class="py-20 bg-gradient-to-b from-base-200 to-base-100">
    <div class="container mx-auto max-w-7xl px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center space-y-4 mb-16" data-aos="fade-up">
            <span class="badge badge-accent badge-lg">{{ $this->getText($content['badge']) }}</span>
            <h2 class="text-4xl lg:text-5xl font-bold text-base-content">
                {{ $this->getText($content['heading']) }}
            </h2>
            <p class="text-lg text-base-content/70 max-w-2xl mx-auto">
                {{ $this->getText($content['description']) }}
            </p>
        </div>

        {{-- Mitra Preview Grid (3 kategori mitra) --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Category 1: Pertambangan Nikel --}}
            <div data-aos="fade-up" data-aos-delay="100" class="h-full">
                <div class="card bg-base-100 hover:bg-base-200 transition-all duration-300 p-6 group h-full">
                    <div class="space-y-4">
                        <div
                            class="w-16 h-16 bg-primary/10 group-hover:bg-primary rounded-2xl flex items-center justify-center transition-colors">
                            <x-icon name="o-building-office-2"
                                class="h-8 text-primary group-hover:text-primary-content transition-colors" />
                        </div>
                        <div class="space-y-2">
                            <span class="badge badge-primary badge-sm">{{ $this->getText($content['category1_badge']) }}</span>
                            <h3 class="text-xl font-bold text-base-content">{{ $this->getText($content['category1_title']) }}</h3>
                            <p class="text-sm text-base-content/70">
                                {{ $this->getText($content['category1_desc']) }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Category 2: Stone Mining --}}
            <div data-aos="fade-up" data-aos-delay="200" class="h-full">
                <div class="card bg-base-100 hover:bg-base-200 transition-all duration-300 p-6 group h-full">
                    <div class="space-y-4">
                        <div
                            class="w-16 h-16 bg-secondary/10 group-hover:bg-secondary rounded-2xl flex items-center justify-center transition-colors">
                            <x-icon name="o-cube"
                                class="h-8 text-secondary group-hover:text-secondary-content transition-colors" />
                        </div>
                        <div class="space-y-2">
                            <span class="badge badge-secondary badge-sm">{{ $this->getText($content['category2_badge']) }}</span>
                            <h3 class="text-xl font-bold text-base-content">{{ $this->getText($content['category2_title']) }}</h3>
                            <p class="text-sm text-base-content/70">
                                {{ $this->getText($content['category2_desc']) }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Category 3: Konstruksi --}}
            <div data-aos="fade-up" data-aos-delay="300" class="h-full">
                <div class="card bg-base-100 hover:bg-base-200 transition-all duration-300 p-6 group h-full">
                    <div class="space-y-4">
                        <div
                            class="w-16 h-16 bg-accent/10 group-hover:bg-accent rounded-2xl flex items-center justify-center transition-colors">
                            <x-icon name="o-wrench-screwdriver"
                                class="h-8 text-accent group-hover:text-accent-content transition-colors" />
                        </div>
                        <div class="space-y-2">
                            <span class="badge badge-accent badge-sm">{{ $this->getText($content['category3_badge']) }}</span>
                            <h3 class="text-xl font-bold text-base-content">{{ $this->getText($content['category3_title']) }}</h3>
                            <p class="text-sm text-base-content/70">
                                {{ $this->getText($content['category3_desc']) }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- CTA to Mitra Page --}}
        <div class="text-center pt-12" data-aos="fade-up" data-aos-delay="500">
            <a href="/mitra" wire:navigate class="btn btn-primary btn-lg gap-2 shadow-lg group">
                <span>{{ $this->getText($content['cta_button']) }}</span>
                <x-icon name="o-arrow-right" class="h-5 group-hover:translate-x-1 transition-transform" />
            </a>
        </div>
    </div>
</section>

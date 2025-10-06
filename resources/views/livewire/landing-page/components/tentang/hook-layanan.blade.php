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

        {{-- Services Preview Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Service 1: Perdagangan Batuan dan Pasir --}}
            <div data-aos="fade-up" data-aos-delay="100">
                <div class="card bg-base-200 hover:bg-base-300 transition-all duration-300 p-8 group h-full">
                    <div class="space-y-6">
                        <div
                            class="w-16 h-16 bg-primary/10 group-hover:bg-primary rounded-2xl flex items-center justify-center transition-colors">
                            <x-icon name="o-cube"
                                class="h-8 text-primary group-hover:text-primary-content transition-colors" />
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-2xl font-bold text-base-content break-words">{{ $this->getText($content['service1']['title']) }}</h3>
                            <p class="text-base-content/70 break-words">
                                {{ $this->getText($content['service1']['description']) }}
                            </p>
                        </div>
                        <div
                            class="flex items-center gap-2 text-primary font-medium opacity-0 group-hover:opacity-100 transition-opacity">
                            <span class="text-sm">{{ $this->getText($content['service1']['cta']) }}</span>
                            <x-icon name="o-arrow-down" class="h-4" />
                        </div>
                    </div>
                </div>
            </div>

            {{-- Service 2: Distributor Semen --}}
            <div data-aos="fade-up" data-aos-delay="200">
                <div class="card bg-base-200 hover:bg-base-300 transition-all duration-300 p-8 group h-full">
                    <div class="space-y-6">
                        <div
                            class="w-16 h-16 bg-secondary/10 group-hover:bg-secondary rounded-2xl flex items-center justify-center transition-colors">
                            <x-icon name="o-building-storefront"
                                class="h-8 text-secondary group-hover:text-secondary-content transition-colors" />
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-2xl font-bold text-base-content break-words">{{ $this->getText($content['service2']['title']) }}</h3>
                            <p class="text-base-content/70 break-words">
                                {{ $this->getText($content['service2']['description']) }}
                            </p>
                        </div>
                        <div
                            class="flex items-center gap-2 text-secondary font-medium opacity-0 group-hover:opacity-100 transition-opacity">
                            <span class="text-sm">{{ $this->getText($content['service2']['cta']) }}</span>
                            <x-icon name="o-arrow-down" class="h-4" />
                        </div>
                    </div>
                </div>
            </div>

            {{-- Service 3: Jasa Perkapalan --}}
            <div data-aos="fade-up" data-aos-delay="300">
                <div class="card bg-base-200 hover:bg-base-300 transition-all duration-300 p-8 group h-full">
                    <div class="space-y-6">
                        <div
                            class="w-16 h-16 bg-accent/10 group-hover:bg-accent rounded-2xl flex items-center justify-center transition-colors">
                            <x-icon name="o-arrow-path-rounded-square"
                                class="h-8 text-accent group-hover:text-accent-content transition-colors" />
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-2xl font-bold text-base-content">{{ $this->getText($content['service3']['title']) }}</h3>
                            <p class="text-base-content/70">
                                {{ $this->getText($content['service3']['description']) }}
                            </p>
                        </div>
                        <div
                            class="flex items-center gap-2 text-accent font-medium opacity-0 group-hover:opacity-100 transition-opacity">
                            <span class="text-sm">{{ $this->getText($content['service3']['cta']) }}</span>
                            <x-icon name="o-arrow-down" class="h-4" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- CTA to Layanan Page --}}
        <div class="text-center pt-12" data-aos="fade-up" data-aos-delay="400">
            <a href="{{ route('layanan') }}" wire:navigate class="btn btn-primary btn-lg gap-2 shadow-lg group">
                <span>{{ $this->getText($content['cta_button']) }}</span>
                <x-icon name="o-arrow-right" class="h-5 group-hover:translate-x-1 transition-transform" />
            </a>
        </div>
    </div>
</section>

<section class="py-20 bg-gradient-to-b from-base-100 to-base-200">
    <div class="container mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            {{-- Content --}}
            <div class="space-y-8" data-aos="fade-right">
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center">
                            <x-icon name="o-arrow-path-rounded-square" class="h-6 text-accent" />
                        </div>
                        <span class="badge badge-accent badge-lg">{{ $this->getText($content['badge']) }}</span>
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-base-content">
                        <span class="text-accent">{{ $this->getText($content['heading']) }}</span>
                        {{ $this->getText($content['headingContinuation']) }}
                    </h2>
                    <p class="text-lg text-base-content/70 leading-relaxed">
                        {{ $this->getText($content['description']) }}
                    </p>
                </div>

                {{-- Services List --}}
                <div class="space-y-4">
                    <h3 class="text-xl font-semibold text-base-content">{{ $this->getText($content['sectionTitle']) }}</h3>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex items-start gap-3">
                            <x-icon name="o-check-circle" class="h-6 text-accent flex-shrink-0 mt-0.5" />
                            <div>
                                <div class="font-medium text-base-content">{{ $this->getText($content['service1Title']) }}</div>
                                <div class="text-sm text-base-content/60">{{ $this->getText($content['service1Desc']) }}</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <x-icon name="o-check-circle" class="h-6 text-accent flex-shrink-0 mt-0.5" />
                            <div>
                                <div class="font-medium text-base-content">{{ $this->getText($content['service2Title']) }}</div>
                                <div class="text-sm text-base-content/60">{{ $this->getText($content['service2Desc']) }}</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <x-icon name="o-check-circle" class="h-6 text-accent flex-shrink-0 mt-0.5" />
                            <div>
                                <div class="font-medium text-base-content">{{ $this->getText($content['service3Title']) }}</div>
                                <div class="text-sm text-base-content/60">{{ $this->getText($content['service3Desc']) }}</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <x-icon name="o-check-circle" class="h-6 text-accent flex-shrink-0 mt-0.5" />
                            <div>
                                <div class="font-medium text-base-content">{{ $this->getText($content['service4Title']) }}</div>
                                <div class="text-sm text-base-content/60">{{ $this->getText($content['service4Desc']) }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Image --}}
            <div class="relative" data-aos="fade-left">
                <div class="relative z-10">
                    <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('image/pic_4.jpeg') }}" alt="{{ $this->getText($content['altText']) }}"
                            class="w-full h-full object-cover" />
                    </div>
                </div>

                {{-- Floating Card --}}
                <div class="absolute -bottom-6 -left-6 bg-base-100 rounded-2xl shadow-2xl p-6 max-w-xs z-20">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-accent rounded-lg flex items-center justify-center">
                            <x-icon name="o-truck" class="h-6 text-accent-content" />
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-base-content">{{ $this->getText($content['floatingCardTitle']) }}</div>
                            <div class="text-xs text-base-content/60">{{ $this->getText($content['floatingCardDesc']) }}</div>
                        </div>
                    </div>
                </div>

                {{-- Decorative Element --}}
                <div class="absolute -top-12 -right-12 w-64 h-64 bg-accent/10 rounded-full blur-3xl -z-10"></div>
            </div>
        </div>
    </div>
</section>

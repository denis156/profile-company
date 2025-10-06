<section class="py-20 bg-base-100">
    <div class="container mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            {{-- Image --}}
            <div class="relative lg:order-1 order-2" data-aos="fade-right">
                <div class="relative z-10">
                    <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('image/pic_7.svg') }}" alt="{{ $this->getText($content['alt_image']) }}"
                            class="w-full h-full object-cover" />
                    </div>
                </div>

                {{-- Floating Badge --}}
                <div class="absolute -top-6 -left-6 bg-base-100 rounded-2xl shadow-2xl p-6 max-w-xs z-20">
                    <div class="flex items-center gap-3">
                        <x-icon name="o-shield-check" class="h-8 text-secondary" />
                        <div>
                            <div class="text-sm font-semibold text-base-content">{{ $this->getText($content['floating_badge_title']) }}</div>
                            <div class="text-xs text-base-content/60">{{ $this->getText($content['floating_badge_sk']) }}</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Content --}}
            <div class="space-y-8 lg:order-2 order-1" data-aos="fade-left">
                <div class="space-y-4">
                    <span class="badge badge-soft badge-secondary badge-lg">{{ $this->getText($content['badge_trusted']) }}</span>
                    <h2 class="text-4xl lg:text-5xl font-bold text-base-content">
                        <span class="text-secondary">{{ $this->getText($content['title_highlight']) }}</span>
                        {{ $this->getText($content['title_main']) }}
                    </h2>
                    <p class="text-lg text-base-content/70 leading-relaxed">
                        {{ $this->getText($content['description']) }}
                    </p>
                </div>

                {{-- Keunggulan --}}
                <div class="space-y-4">
                    <h3 class="text-xl font-semibold text-base-content">{{ $this->getText($content['advantages_title']) }}</h3>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex items-start gap-3">
                            <x-icon name="o-check-circle" class="h-6 text-secondary flex-shrink-0 mt-0.5" />
                            <div>
                                <div class="font-medium text-base-content">{{ $this->getText($content['advantage_1_title']) }}</div>
                                <div class="text-sm text-base-content/60">{{ $this->getText($content['advantage_1_desc']) }}</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <x-icon name="o-check-circle" class="h-6 text-secondary flex-shrink-0 mt-0.5" />
                            <div>
                                <div class="font-medium text-base-content">{{ $this->getText($content['advantage_2_title']) }}</div>
                                <div class="text-sm text-base-content/60">{{ $this->getText($content['advantage_2_desc']) }}</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <x-icon name="o-check-circle" class="h-6 text-secondary flex-shrink-0 mt-0.5" />
                            <div>
                                <div class="font-medium text-base-content">{{ $this->getText($content['advantage_3_title']) }}</div>
                                <div class="text-sm text-base-content/60">{{ $this->getText($content['advantage_3_desc']) }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Partnership Badge --}}
                <div class="card bg-gradient-to-r from-secondary/5 to-secondary/10 border border-secondary/20 p-6">
                    <div class="flex items-start gap-4">
                        <x-icon name="o-truck" class="h-6 text-secondary flex-shrink-0" />
                        <div class="space-y-1">
                            <div class="font-semibold text-base-content">{{ $this->getText($content['partnership_title']) }}</div>
                            <div class="text-sm text-base-content/70">
                                {{ $this->getText($content['partnership_desc']) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

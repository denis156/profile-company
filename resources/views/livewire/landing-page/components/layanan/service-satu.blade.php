<section class="py-20 bg-gradient-to-b from-base-300 to-base-100">
    <div class="container mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            {{-- Content --}}
            <div class="space-y-8" data-aos="fade-right">
                <div class="space-y-4">
                    <span class="badge badge-soft badge-primary badge-lg">{{ $this->getText($content['badge']) }}</span>
                    <h2 class="text-4xl lg:text-5xl font-bold text-base-content">
                        <span class="text-primary">{{ $this->getText($content['heading']) }}</span>
                        {{ $this->getText($content['headingAccent']) }}
                    </h2>
                    <p class="text-lg text-base-content/70 leading-relaxed">
                        {{ $this->getText($content['description']) }}
                    </p>
                </div>

                {{-- Features --}}
                <div class="space-y-4">
                    <h3 class="text-xl font-semibold text-base-content">
                        {{ $this->getText($content['advantagesTitle']) }}</h3>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex items-start gap-3">
                            <x-icon name="o-check-circle" class="h-6 text-primary flex-shrink-0 mt-0.5" />
                            <div>
                                <div class="font-medium text-base-content">
                                    {{ $this->getText($content['feature1Title']) }}</div>
                                <div class="text-sm text-base-content/60">{{ $this->getText($content['feature1Desc']) }}
                                </div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <x-icon name="o-check-circle" class="h-6 text-primary flex-shrink-0 mt-0.5" />
                            <div>
                                <div class="font-medium text-base-content">
                                    {{ $this->getText($content['feature2Title']) }}</div>
                                <div class="text-sm text-base-content/60">{{ $this->getText($content['feature2Desc']) }}
                                </div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <x-icon name="o-check-circle" class="h-6 text-primary flex-shrink-0 mt-0.5" />
                            <div>
                                <div class="font-medium text-base-content">
                                    {{ $this->getText($content['feature3Title']) }}</div>
                                <div class="text-sm text-base-content/60">
                                    {{ $this->getText($content['feature3Desc']) }}</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <x-icon name="o-check-circle" class="h-6 text-primary flex-shrink-0 mt-0.5" />
                            <div>
                                <div class="font-medium text-base-content">
                                    {{ $this->getText($content['feature4Title']) }}</div>
                                <div class="text-sm text-base-content/60">
                                    {{ $this->getText($content['feature4Desc']) }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Image --}}
            <div class="relative" data-aos="fade-left">
                <div class="relative z-10">
                    <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('image/pic_3.jpeg') }}" alt="{{ $this->getText($content['imageAlt']) }}"
                            class="w-full h-full object-cover" />
                    </div>
                </div>

                {{-- Floating Stats --}}
                <div class="absolute -bottom-6 -right-6 bg-base-100 rounded-2xl shadow-2xl p-6 max-w-xs z-20">
                    <div class="text-center space-y-2">
                        <div class="text-4xl font-bold text-primary">23+</div>
                        <div class="text-sm text-base-content/60">{{ $this->getText($content['statsLabel']) }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

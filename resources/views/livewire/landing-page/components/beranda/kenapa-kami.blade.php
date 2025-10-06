<section class="py-20 bg-gradient-to-b from-base-300 to-base-100">
    <div class="container mx-auto max-w-7xl px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center space-y-4 mb-16" data-aos="fade-up">
            <div class="inline-block">
                <span class="badge badge-soft badge-primary badge-lg">{{ $this->getText($content['badge']) }}</span>
            </div>
            <h2 class="text-4xl lg:text-5xl font-bold text-base-content">
                {{ $this->getText($content['heading']) }} <br class="hidden lg:block" />
                <span class="text-primary">{{ $this->getText($content['headingAccent']) }}</span>
            </h2>
            <p class="text-lg text-base-content/70 max-w-2xl mx-auto">
                {{ $this->getText($content['description']) }}
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            {{-- Stats & Image Side --}}
            <div class="space-y-6" data-aos="fade-right">
                {{-- Main Video --}}
                <div class="relative">
                    <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl">
                        <video
                            class="w-full h-full object-cover"
                            autoplay
                            loop
                            muted
                            playsinline>
                            <source src="{{ asset('video/vid_1.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                    {{-- Floating Stats Card --}}
                    <div class="absolute -bottom-6 -right-6 bg-base-100 rounded-2xl shadow-2xl p-6 max-w-xs"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="grid grid-cols-2 gap-4">
                            @foreach($content['stats'] as $index => $stat)
                                <div class="text-center">
                                    <div class="text-3xl font-bold {{ $index === 0 ? 'text-primary' : 'text-accent' }}">{{ $stat['value'] }}</div>
                                    <div class="text-xs text-base-content/60">{{ $this->getText($stat['label']) }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Decorative Element --}}
                    <div class="absolute -top-12 -left-12 w-64 h-64 bg-primary/10 rounded-full blur-3xl -z-10">
                    </div>
                </div>
            </div>

            {{-- Features Side --}}
            <div class="space-y-6" data-aos="fade-left">
                {{-- Feature Cards --}}
                <div class="grid grid-cols-1 gap-6">
                    @foreach($content['features'] as $feature)
                        <div class="card bg-base-100 p-6 hover:shadow-xl transition-shadow">
                            <div class="flex items-start gap-4">
                                <div class="w-16 h-16 bg-{{ $feature['iconBg'] }}/10 rounded-2xl flex items-center justify-center flex-shrink-0">
                                    <x-icon name="{{ $feature['icon'] }}" class="h-8 text-{{ $feature['iconBg'] }}" />
                                </div>
                                <div class="flex-1 space-y-2">
                                    <h3 class="text-xl font-semibold text-base-content">{{ $this->getText($feature['title']) }}</h3>
                                    <p class="text-sm text-base-content/70 leading-relaxed">
                                        @if(isset($feature['description']))
                                            @if($feature['icon'] === 'o-shield-check')
                                                {{ $this->getText($feature['description']) }}
                                            @else
                                                {{ $this->getText($feature['description']) }}
                                            @endif
                                        @endif
                                    </p>
                                    @if(isset($feature['badge']))
                                        <div class="flex items-center gap-2 text-xs text-primary font-medium pt-2">
                                            <x-icon name="o-check-circle" class="h-4" />
                                            <span>{{ $this->getText($feature['badge']) }}</span>
                                        </div>
                                    @endif
                                    @if(isset($feature['items']))
                                        <div class="grid grid-cols-2 gap-3 pt-2">
                                            @foreach($feature['items'] as $item)
                                                <div class="flex items-center gap-2 text-xs text-base-content/80">
                                                    <x-icon name="o-check-circle" class="h-4 text-secondary" />
                                                    <span>{{ $this->getText($item) }}</span>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- CTA --}}
                <div class="pt-4">
                    <a href="{{ route('tentang-kami') }}" wire:navigate
                        class="btn btn-primary btn-lg gap-2 w-full lg:w-auto shadow-lg">
                        <x-icon name="o-information-circle" class="h-5" />
                        {{ $this->getText($content['cta']) }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

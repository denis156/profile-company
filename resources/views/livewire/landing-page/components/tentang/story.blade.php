<section class="py-20 bg-gradient-to-b from-base-300 to-base-100">
    <div class="container mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            {{-- Story Content --}}
            <div class="space-y-8" data-aos="fade-right">
                <div class="space-y-4">
                    <span class="badge badge-soft badge-primary badge-lg">{{ $this->getText($content['badge']) }}</span>
                    <h2 class="text-4xl lg:text-5xl font-bold text-base-content">
                        {{ $this->getText($content['heading']) }}
                        <span class="text-primary">{{ $this->getText($content['headingAccent']) }}</span>
                    </h2>
                </div>

                <div class="space-y-6 text-base-content/80">
                    @foreach($content['paragraphs'] as $paragraph)
                        <p class="text-lg leading-relaxed">
                            {!! $this->getText($paragraph) !!}
                        </p>
                    @endforeach
                </div>

                {{-- Timeline --}}
                <div class="space-y-4 pt-4">
                    @foreach($content['timeline'] as $item)
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 bg-{{ $item['iconBg'] }}/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                <x-icon name="{{ $item['icon'] }}" class="h-8 text-{{ $item['iconBg'] }}" />
                            </div>
                            <div>
                                <div class="font-semibold text-base-content">{{ $this->getText($item['title']) }}</div>
                                <div class="text-sm text-base-content/60">{{ $this->getText($item['subtitle']) }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Story Image --}}
            <div class="relative" data-aos="fade-left">
                <div class="relative z-10">
                    <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('image/pic_2.jpeg') }}"
                            class="w-full h-full object-cover" />
                    </div>
                </div>

                {{-- Floating Card --}}
                <div class="absolute -bottom-8 -left-8 bg-base-100 rounded-2xl shadow-2xl p-6 max-w-xs z-20">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 bg-primary rounded-xl flex items-center justify-center flex-shrink-0">
                            <span class="text-3xl font-bold text-primary-content">{{ $content['floatingCard']['value'] }}</span>
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-base-content">{{ $this->getText($content['floatingCard']['title']) }}</div>
                            <div class="text-xs text-base-content/60">{{ $this->getText($content['floatingCard']['subtitle']) }}</div>
                        </div>
                    </div>
                </div>

                {{-- Decorative Element --}}
                <div class="absolute -top-12 -right-12 w-64 h-64 bg-primary/10 rounded-full blur-3xl -z-10"></div>
            </div>
        </div>
    </div>
</section>

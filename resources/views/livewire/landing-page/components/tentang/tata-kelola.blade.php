<section id="tata-kelola" class="py-20 bg-gradient-to-b from-base-200 to-base-100">
    <div class="container mx-auto max-w-7xl px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center space-y-4 mb-16" data-aos="fade-up">
            <span class="badge badge-soft badge-primary badge-lg">{{ $this->getText($content['badge']) }}</span>
            <h2 class="text-4xl lg:text-5xl font-bold text-base-content">
                {{ $this->getText($content['heading']) }}
                <span class="text-primary">{{ $this->getText($content['headingAccent']) }}</span>
            </h2>
        </div>

        {{-- Content Grid --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            {{-- Text Content --}}
            <div class="space-y-6" data-aos="fade-right">
                <p class="text-lg leading-relaxed text-base-content/80">
                    {{ $this->getText($content['paragraph1']) }} <span
                        class="font-semibold text-primary">{{ $this->getText($content['sop']) }}</span>.
                </p>
                <p class="text-lg leading-relaxed text-base-content/80">
                    {{ $this->getText($content['paragraph2']) }}
                </p>

                {{-- Prinsip Governance --}}
                <div class="space-y-4 pt-4">
                    <h3 class="text-2xl font-bold text-base-content">{{ $this->getText($content['principlesHeading']) }}
                    </h3>
                    <div class="grid grid-cols-1 gap-3">
                        @foreach ($content['principles'] as $principle)
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 bg-{{ $principle['color'] }}/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <x-icon name="o-check-circle" class="h-6 text-{{ $principle['color'] }}" />
                                </div>
                                <span class="text-base text-base-content/80"><span
                                        class="font-semibold">{{ $principle['title'] }}</span> -
                                    {{ $this->getText($principle['description']) }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Image Side --}}
            <div class="relative" data-aos="fade-left">
                <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl">
                    <img src="{{ asset('image/pic_1.jpeg') }}" alt="{{ $this->getText($content['imageAlt']) }}"
                        class="w-full h-full object-cover" />
                </div>
                {{-- Decorative Element --}}
                <div class="absolute -bottom-12 -right-12 w-64 h-64 bg-primary/10 rounded-full blur-3xl -z-10">
                </div>
            </div>
        </div>
    </div>
</section>

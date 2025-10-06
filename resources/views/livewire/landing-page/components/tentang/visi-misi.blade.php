<section id="visi-misi" class="py-20 bg-base-100">
    <div class="container mx-auto max-w-7xl px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center space-y-4 mb-16" data-aos="fade-up">
            <span class="badge badge-primary badge-lg">{{ $this->getText($content['badge']) }}</span>
            <h2 class="text-4xl lg:text-5xl font-bold text-base-content">
                {{ $this->getText($content['heading']) }}
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            {{-- Visi Card --}}
            <div class="card bg-gradient-to-br from-primary/5 to-primary/10 border-2 border-primary/20 p-8 lg:p-12"
                data-aos="fade-right">
                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 bg-primary rounded-2xl flex items-center justify-center flex-shrink-0">
                            <x-icon name="o-eye" class="h-8 text-primary-content" />
                        </div>
                        <h3 class="text-2xl font-bold text-primary">{{ $this->getText($content['vision']['title']) }}</h3>
                    </div>
                    <p class="text-lg text-base-content/80 leading-relaxed">
                        {!! $this->getText($content['vision']['content']) !!}
                    </p>
                </div>
            </div>

            {{-- Misi Card --}}
            <div class="card bg-gradient-to-br from-accent/5 to-accent/10 border-2 border-accent/20 p-8 lg:p-12"
                data-aos="fade-left">
                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 bg-accent rounded-2xl flex items-center justify-center flex-shrink-0">
                            <x-icon name="o-flag" class="h-8 text-accent-content" />
                        </div>
                        <h3 class="text-2xl font-bold text-accent">{{ $this->getText($content['mission']['title']) }}</h3>
                    </div>
                    <ul class="space-y-4">
                        @foreach($content['mission']['items'] as $item)
                            <li class="flex items-start gap-3">
                                <x-icon name="o-check-circle" class="h-6 text-accent flex-shrink-0 mt-0.5" />
                                <span class="text-base text-base-content/80">
                                    {{ $this->getText($item) }}
                                </span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

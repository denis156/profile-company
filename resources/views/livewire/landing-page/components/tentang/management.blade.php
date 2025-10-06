<section id="management" class="py-20 bg-gradient-to-b from-base-200 to-base-100">
    <div class="container mx-auto max-w-7xl px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center space-y-4 mb-16" data-aos="fade-up">
            <span class="badge badge-soft badge-primary badge-lg">{{ $this->getText($content['badge']) }}</span>
            <h2 class="text-4xl lg:text-5xl font-bold text-base-content">
                {{ $this->getText($content['heading']) }}
                <span class="text-primary">{{ $this->getText($content['headingAccent']) }}</span>
            </h2>
            <p class="text-lg text-base-content/70 max-w-2xl mx-auto break-words">
                {{ $this->getText($content['description']) }}
            </p>
        </div>

        {{-- Management Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($content['positions'] as $index => $position)
                <div data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                    <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300 p-8">
                        <div class="flex flex-col items-center text-center space-y-4">
                            <div class="w-24 h-24 bg-{{ $position['color'] }}/10 rounded-full flex items-center justify-center">
                                <x-icon name="{{ $position['icon'] }}" class="h-16 text-{{ $position['color'] }}" />
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-base-content break-words">{{ $this->getText($position['title']) }}</h3>
                                <p class="text-base text-{{ $position['color'] }} font-semibold mt-1 break-words">{{ $position['name'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

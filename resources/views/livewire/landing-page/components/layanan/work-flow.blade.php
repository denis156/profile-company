<section class="py-20 bg-base-200">
    <div class="container mx-auto max-w-7xl px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center space-y-4 mb-16" data-aos="fade-up">
            <span class="badge badge-primary badge-lg">{{ $this->getText($content['badge']) }}</span>
            <h2 class="text-4xl lg:text-5xl font-bold text-base-content">
                {{ $this->getText($content['heading1']) }}
                <span class="text-primary">{{ $this->getText($content['heading2']) }}</span>
            </h2>
            <p class="text-lg text-base-content/70 max-w-2xl mx-auto">
                {{ $this->getText($content['description']) }}
            </p>
        </div>

        {{-- Process Steps --}}
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            {{-- Step 1 --}}
            <div data-aos="fade-up" data-aos-delay="100">
                <div class="card bg-base-100 p-6 h-full">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center">
                                <span class="text-xl font-bold text-primary-content">1</span>
                            </div>
                            <x-icon name="o-arrow-right" class="h-6 text-base-content/20" />
                        </div>
                        <div class="space-y-2">
                            <h3 class="text-xl font-semibold text-base-content">{{ $this->getText($content['step1Title']) }}</h3>
                            <p class="text-sm text-base-content/70">
                                {{ $this->getText($content['step1Desc']) }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Step 2 --}}
            <div data-aos="fade-up" data-aos-delay="200">
                <div class="card bg-base-100 p-6 h-full">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="w-12 h-12 bg-secondary rounded-xl flex items-center justify-center">
                                <span class="text-xl font-bold text-secondary-content">2</span>
                            </div>
                            <x-icon name="o-arrow-right" class="h-6 text-base-content/20" />
                        </div>
                        <div class="space-y-2">
                            <h3 class="text-xl font-semibold text-base-content">{{ $this->getText($content['step2Title']) }}</h3>
                            <p class="text-sm text-base-content/70">
                                {{ $this->getText($content['step2Desc']) }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Step 3 --}}
            <div data-aos="fade-up" data-aos-delay="300">
                <div class="card bg-base-100 p-6 h-full">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="w-12 h-12 bg-accent rounded-xl flex items-center justify-center">
                                <span class="text-xl font-bold text-accent-content">3</span>
                            </div>
                            <x-icon name="o-arrow-right" class="h-6 text-base-content/20" />
                        </div>
                        <div class="space-y-2">
                            <h3 class="text-xl font-semibold text-base-content">{{ $this->getText($content['step3Title']) }}</h3>
                            <p class="text-sm text-base-content/70">
                                {{ $this->getText($content['step3Desc']) }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Step 4 --}}
            <div data-aos="fade-up" data-aos-delay="400">
                <div class="card bg-base-100 p-6 h-full">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center">
                                <span class="text-xl font-bold text-primary-content">4</span>
                            </div>
                            <x-icon name="o-check-circle" class="h-6 text-success" />
                        </div>
                        <div class="space-y-2">
                            <h3 class="text-xl font-semibold text-base-content">{{ $this->getText($content['step4Title']) }}</h3>
                            <p class="text-sm text-base-content/70">
                                {{ $this->getText($content['step4Desc']) }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

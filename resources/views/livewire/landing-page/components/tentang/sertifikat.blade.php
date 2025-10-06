<section id="sertifikat" class="py-20 bg-base-100">
    <div class="container mx-auto max-w-7xl px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center space-y-4 mb-16" data-aos="fade-up">
            <span class="badge badge-soft badge-primary badge-lg">{{ $this->getText($content['badge']) }}</span>
            <h2 class="text-4xl lg:text-5xl font-bold text-base-content">
                {{ $this->getText($content['heading_part1']) }}
                <span class="text-primary">{{ $this->getText($content['heading_part2']) }}</span>
            </h2>
            <p class="text-lg text-base-content/70 max-w-2xl mx-auto">
                {{ $this->getText($content['description']) }}
            </p>
        </div>

        {{-- Sertifikat Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            {{-- Lab Report 1 --}}
            <div data-aos="fade-up" data-aos-delay="100">
                <div class="card bg-base-200 hover:bg-base-300 transition-all duration-300 p-8">
                    <div class="flex items-start gap-6">
                        <div class="w-20 h-20 bg-primary/10 rounded-2xl flex items-center justify-center flex-shrink-0">
                            <x-icon name="o-beaker" class="h-10 text-primary" />
                        </div>
                        <div class="flex-1 space-y-3">
                            <div class="flex items-center gap-2">
                                <h3 class="text-xl font-bold text-base-content">{{ $this->getText($content['lab_report']) }}</h3>
                                <span class="badge badge-primary badge-lg text-xs md:badge-md md:text-md">Geo Gea Laboratory</span>
                            </div>
                            <div class="space-y-2 text-sm text-base-content/70">
                                <p><span class="font-semibold">{{ $this->getText($content['sample_label']) }}</span> {{ $this->getText($content['report1_sample']) }}</p>
                                <p><span class="font-semibold">{{ $this->getText($content['number_label']) }}</span> KDI.DOS.2500257</p>
                                <p><span class="font-semibold">{{ $this->getText($content['date_label']) }}</span> 20/05/2025 - 20/05/2025</p>
                                <p><span class="font-semibold">{{ $this->getText($content['method_label']) }}</span> WD-XRF Fusion Bead</p>
                            </div>
                            <div class="pt-2">
                                <span class="badge badge-outline badge-lg text-xs md:badge-md md:text-md">3 {{ $this->getText($content['sample_analyzed']) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Lab Report 2 --}}
            <div data-aos="fade-up" data-aos-delay="200">
                <div class="card bg-base-200 hover:bg-base-300 transition-all duration-300 p-8">
                    <div class="flex items-start gap-6">
                        <div
                            class="w-20 h-20 bg-secondary/10 rounded-2xl flex items-center justify-center flex-shrink-0">
                            <x-icon name="o-beaker" class="h-10 text-secondary" />
                        </div>
                        <div class="flex-1 space-y-3">
                            <div class="flex items-center gap-2">
                                <h3 class="text-xl font-bold text-base-content">{{ $this->getText($content['lab_report']) }}</h3>
                                <span class="badge badge-secondary badge-lg text-xs md:badge-md md:text-md">Geo Gea Laboratory</span>
                            </div>
                            <div class="space-y-2 text-sm text-base-content/70">
                                <p><span class="font-semibold">{{ $this->getText($content['sample_label']) }}</span> {{ $this->getText($content['report2_sample']) }}</p>
                                <p><span class="font-semibold">{{ $this->getText($content['number_label']) }}</span> KDI.DOS.2500258</p>
                                <p><span class="font-semibold">{{ $this->getText($content['date_label']) }}</span> 19/05/2025 - 22/02/2025</p>
                                <p><span class="font-semibold">{{ $this->getText($content['method_label']) }}</span> WD-XRF Fusion Bead</p>
                            </div>
                            <div class="pt-2">
                                <span class="badge badge-outline badge-lg text-xs md:badge-md md:text-md">1 {{ $this->getText($content['sample_analyzed']) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

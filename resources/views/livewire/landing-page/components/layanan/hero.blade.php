<section class="relative min-h-screen flex items-center overflow-hidden bg-gradient-to-b from-base-100 to-base-200">
    {{-- Background Pattern --}}
    <livewire:landing-page.components.bg-pattren />

    <div class="container mx-auto max-w-7xl px-6 lg:px-8 py-24 relative z-10">
        <div class="max-w-4xl mx-auto text-center space-y-8">
            {{-- Title --}}
            <div class="space-y-6" data-aos="fade-up">
                <span class="badge badge-primary badge-lg">Solusi Terpadu</span>
                <h1 class="text-5xl lg:text-6xl font-bold text-base-content">
                    Layanan Profesional untuk
                    <p class="text-primary">Kesuksesan Bisnis Anda</p>
                </h1>
                <p class="text-xl text-base-content/70 max-w-3xl mx-auto leading-relaxed">
                    Kami menyediakan tiga pilar layanan utama yang dirancang untuk mendukung pertumbuhan dan
                    keberhasilan proyek Anda
                </p>
            </div>

            {{-- Quick Service Icons --}}
            <div class="grid grid-cols-3 gap-4 md:gap-6 pt-8" data-aos="fade-up" data-aos-delay="200">
                <div class="flex flex-col items-center gap-2 md:gap-3">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-primary/10 rounded-xl md:rounded-2xl flex items-center justify-center">
                        <x-icon name="o-cube" class="h-6 md:h-8 text-primary" />
                    </div>
                    <div class="text-xs md:text-sm font-medium text-base-content text-center">Perdagangan Batuan dan Pasir</div>
                </div>
                <div class="flex flex-col items-center gap-2 md:gap-3">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-secondary/10 rounded-xl md:rounded-2xl flex items-center justify-center">
                        <x-icon name="o-building-storefront" class="h-6 md:h-8 text-secondary" />
                    </div>
                    <div class="text-xs md:text-sm font-medium text-base-content text-center">Distributor Semen</div>
                </div>
                <div class="flex flex-col items-center gap-2 md:gap-3">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-accent/10 rounded-xl md:rounded-2xl flex items-center justify-center">
                        <x-icon name="o-arrow-path-rounded-square" class="h-6 md:h-8 text-accent" />
                    </div>
                    <div class="text-xs md:text-sm font-medium text-base-content text-center">Jasa Perkapalan</div>
                </div>
            </div>
        </div>
    </div>
</section>

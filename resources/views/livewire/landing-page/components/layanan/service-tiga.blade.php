<section class="py-20 bg-gradient-to-b from-base-100 to-base-200">
    <div class="container mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            {{-- Content --}}
            <div class="space-y-8" data-aos="fade-right">
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center">
                            <x-icon name="o-chart-bar" class="h-6 text-accent" />
                        </div>
                        <span class="badge badge-accent badge-lg">Konsultasi Profesional</span>
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-base-content">
                        <span class="text-accent">Konsultan Bisnis</span>
                        & Strategi
                    </h2>
                    <p class="text-lg text-base-content/70 leading-relaxed">
                        Solusi konsultasi bisnis yang komprehensif untuk membantu mengembangkan dan mengoptimalkan
                        strategi perusahaan Anda.
                    </p>
                </div>

                {{-- Services List --}}
                <div class="space-y-4">
                    <h3 class="text-xl font-semibold text-base-content">Bidang Konsultasi:</h3>
                    <div class="grid grid-cols-1 gap-3">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-accent/10 rounded-lg flex items-center justify-center">
                                <x-icon name="o-briefcase" class="h-4 text-accent" />
                            </div>
                            <span class="text-base-content">Strategi Bisnis & Pengembangan</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-accent/10 rounded-lg flex items-center justify-center">
                                <x-icon name="o-document-text" class="h-4 text-accent" />
                            </div>
                            <span class="text-base-content">Manajemen Proyek & Operasional</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-accent/10 rounded-lg flex items-center justify-center">
                                <x-icon name="o-chart-pie" class="h-4 text-accent" />
                            </div>
                            <span class="text-base-content">Analisis Keuangan & Investasi</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-accent/10 rounded-lg flex items-center justify-center">
                                <x-icon name="o-users" class="h-4 text-accent" />
                            </div>
                            <span class="text-base-content">SDM & Organisasi</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Image --}}
            <div class="relative" data-aos="fade-left">
                <div class="relative z-10">
                    <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('image/pic_3.jpeg') }}" alt="Konsultan Bisnis"
                            class="w-full h-full object-cover" />
                    </div>
                </div>

                {{-- Floating Card --}}
                <div class="absolute -bottom-6 -left-6 bg-base-100 rounded-2xl shadow-2xl p-6 max-w-xs z-20">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-accent rounded-lg flex items-center justify-center">
                            <x-icon name="o-light-bulb" class="h-6 text-accent-content" />
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-base-content">Solusi Inovatif</div>
                            <div class="text-xs text-base-content/60">Data-driven insights</div>
                        </div>
                    </div>
                </div>

                {{-- Decorative Element --}}
                <div class="absolute -top-12 -right-12 w-64 h-64 bg-accent/10 rounded-full blur-3xl -z-10"></div>
            </div>
        </div>
    </div>
</section>

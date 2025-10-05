<section class="py-20 bg-gradient-to-b from-base-300 to-base-100">
    <div class="container mx-auto max-w-7xl px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center space-y-4 mb-16" data-aos="fade-up">
            <div class="inline-block">
                <span class="badge badge-primary badge-lg">Dipercaya Sejak 2022</span>
            </div>
            <h2 class="text-4xl lg:text-5xl font-bold text-base-content">
                Perusahaan dengan Legalitas Resmi <br class="hidden lg:block" />
                <span class="text-primary">& Armada Lengkap</span>
            </h2>
            <p class="text-lg text-base-content/70 max-w-2xl mx-auto">
                Didirikan berdasarkan hukum Negara Republik Indonesia dengan komitmen memberikan layanan
                terbaik
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
                            <div class="text-center">
                                <div class="text-3xl font-bold text-primary">23+</div>
                                <div class="text-xs text-base-content/60">Unit Armada</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-accent">2023</div>
                                <div class="text-xs text-base-content/60">IPP Resmi</div>
                            </div>
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
                    {{-- Card 1: Legalitas --}}
                    <div class="card bg-base-100 p-6 hover:shadow-xl transition-shadow">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center flex-shrink-0">
                                <x-icon name="o-shield-check" class="h-8 text-primary" />
                            </div>
                            <div class="flex-1 space-y-2">
                                <h3 class="text-xl font-semibold text-base-content">Legalitas Resmi &
                                    Terpercaya</h3>
                                <p class="text-sm text-base-content/70 leading-relaxed">
                                    Memiliki Izin Pengangkutan dan Penjualan Komoditas Batuan (IPP) dengan SK
                                    No. <span class="font-semibold">230822004081700001</span> tertanggal 14
                                    Februari 2023
                                </p>
                                <div class="flex items-center gap-2 text-xs text-primary font-medium pt-2">
                                    <x-icon name="o-check-circle" class="h-4" />
                                    <span>Terdaftar Resmi KBLI 46634</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Card 2: Armada --}}
                    <div class="card bg-base-100 p-6 hover:shadow-xl transition-shadow">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-16 h-16 bg-secondary/10 rounded-2xl flex items-center justify-center flex-shrink-0">
                                <x-icon name="o-truck" class="h-8 text-secondary" />
                            </div>
                            <div class="flex-1 space-y-2">
                                <h3 class="text-xl font-semibold text-base-content">Armada Lengkap & Modern
                                </h3>
                                <p class="text-sm text-base-content/70 leading-relaxed">
                                    Didukung peralatan operasional yang lengkap dan terawat untuk menunjang
                                    setiap proyek
                                </p>
                                <div class="grid grid-cols-2 gap-3 pt-2">
                                    <div class="flex items-center gap-2 text-xs text-base-content/80">
                                        <x-icon name="o-check-circle" class="h-4 text-secondary" />
                                        <span>2 Unit Excavator</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-xs text-base-content/80">
                                        <x-icon name="o-check-circle" class="h-4 text-secondary" />
                                        <span>9 Unit Truck</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-xs text-base-content/80">
                                        <x-icon name="o-check-circle" class="h-4 text-secondary" />
                                        <span>2 Unit Crusher</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-xs text-base-content/80">
                                        <x-icon name="o-check-circle" class="h-4 text-secondary" />
                                        <span>10 Kendaraan Ops</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Card 3: Manajemen --}}
                    <div class="card bg-base-100 p-6 hover:shadow-xl transition-shadow">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-16 h-16 bg-accent/10 rounded-2xl flex items-center justify-center flex-shrink-0">
                                <x-icon name="o-users" class="h-8 text-accent" />
                            </div>
                            <div class="flex-1 space-y-2">
                                <h3 class="text-xl font-semibold text-base-content">Tim Profesional</h3>
                                <p class="text-sm text-base-content/70 leading-relaxed">
                                    Kegiatan usaha ditunjang dengan manajemen yang baik dan karyawan yang
                                    berpengalaman di bidangnya
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- CTA --}}
                <div class="pt-4">
                    <a href="{{ route('tentang-kami') }}" wire:navigate
                        class="btn btn-primary btn-lg gap-2 w-full lg:w-auto shadow-lg">
                        <x-icon name="o-information-circle" class="h-5" />
                        Kenali Kami Lebih Dekat
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

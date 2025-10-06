<section class="py-20 bg-base-100">
    <div class="container mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            {{-- Image --}}
            <div class="relative lg:order-1 order-2" data-aos="fade-right">
                <div class="relative z-10">
                    <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('image/pic_7.svg') }}" alt="Distributor Semen"
                            class="w-full h-full object-cover" />
                    </div>
                </div>

                {{-- Floating Badge --}}
                <div class="absolute -top-6 -left-6 bg-base-100 rounded-2xl shadow-2xl p-6 max-w-xs z-20">
                    <div class="flex items-center gap-3">
                        <x-icon name="o-shield-check" class="h-8 text-secondary" />
                        <div>
                            <div class="text-sm font-semibold text-base-content">IPP Resmi 2023</div>
                            <div class="text-xs text-base-content/60">SK No. 230822004081700001</div>
                        </div>
                    </div>
                </div>

                {{-- Decorative Element --}}
                <div class="absolute -bottom-12 -right-12 w-64 h-64 bg-secondary/10 rounded-full blur-3xl -z-10">
                </div>
            </div>

            {{-- Content --}}
            <div class="space-y-8 lg:order-2 order-1" data-aos="fade-left">
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-secondary/10 rounded-xl flex items-center justify-center">
                            <x-icon name="o-building-storefront" class="h-6 text-secondary" />
                        </div>
                        <span class="badge badge-secondary badge-lg">Layanan Terpercaya</span>
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-base-content">
                        <span class="text-secondary">Distributor Semen</span>
                        Terpercaya
                    </h2>
                    <p class="text-lg text-base-content/70 leading-relaxed">
                        Distribusi semen berkualitas tinggi dengan jaringan pengiriman yang luas dan sistem logistik terintegrasi untuk kepastian pasokan Anda.
                    </p>
                </div>

                {{-- Keunggulan --}}
                <div class="space-y-4">
                    <h3 class="text-xl font-semibold text-base-content">Keunggulan Kami:</h3>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex items-start gap-3">
                            <x-icon name="o-check-circle" class="h-6 text-secondary flex-shrink-0 mt-0.5" />
                            <div>
                                <div class="font-medium text-base-content">Produk Berkualitas Tinggi</div>
                                <div class="text-sm text-base-content/60">Semen premium dari brand terpercaya dengan standar SNI</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <x-icon name="o-check-circle" class="h-6 text-secondary flex-shrink-0 mt-0.5" />
                            <div>
                                <div class="font-medium text-base-content">Jaringan Distribusi Luas</div>
                                <div class="text-sm text-base-content/60">Jangkauan pengiriman ke seluruh wilayah Sulawesi Tenggara</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <x-icon name="o-check-circle" class="h-6 text-secondary flex-shrink-0 mt-0.5" />
                            <div>
                                <div class="font-medium text-base-content">Stok Terjamin</div>
                                <div class="text-sm text-base-content/60">Persediaan selalu tersedia untuk kebutuhan proyek Anda</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Partnership Badge --}}
                <div class="card bg-gradient-to-r from-secondary/5 to-secondary/10 border border-secondary/20 p-6">
                    <div class="flex items-start gap-4">
                        <x-icon name="o-truck" class="h-6 text-secondary flex-shrink-0" />
                        <div class="space-y-1">
                            <div class="font-semibold text-base-content">Pengiriman Terpercaya</div>
                            <div class="text-sm text-base-content/70">
                                Didukung armada pengiriman lengkap dengan 9 unit truck dan sistem tracking real-time
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

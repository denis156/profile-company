<section class="py-20 bg-base-100">
    <div class="container mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            {{-- Image --}}
            <div class="relative lg:order-1 order-2" data-aos="fade-right">
                <div class="relative z-10">
                    <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('image/pic_4.jpeg') }}" alt="Perdagangan Umum"
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
                            <x-icon name="o-shopping-cart" class="h-6 text-secondary" />
                        </div>
                        <span class="badge badge-secondary badge-lg">Layanan Terpercaya</span>
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-base-content">
                        <span class="text-secondary">Perdagangan Material Batuan</span>
                        & Konstruksi
                    </h2>
                    <p class="text-lg text-base-content/70 leading-relaxed">
                        Penyedia material batuan dan kebutuhan konstruksi dengan Izin Pengangkutan dan Penjualan
                        (IPP) resmi. Kami menjamin kualitas dan legalitas produk.
                    </p>
                </div>

                {{-- Product Categories --}}
                <div class="space-y-4">
                    <h3 class="text-xl font-semibold text-base-content">Produk Kami:</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="card bg-base-200 p-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 bg-secondary/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <x-icon name="o-cube" class="h-5 text-secondary" />
                                </div>
                                <div>
                                    <div class="font-medium text-sm text-base-content">Material Batuan</div>
                                    <div class="text-xs text-base-content/60">Batu Split, Sirtu, Pasir</div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-base-200 p-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 bg-secondary/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <x-icon name="o-cube" class="h-5 text-secondary" />
                                </div>
                                <div>
                                    <div class="font-medium text-sm text-base-content">Material Konstruksi</div>
                                    <div class="text-xs text-base-content/60">Semen, Besi, dll</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Legal Badge --}}
                <div class="card bg-gradient-to-r from-secondary/5 to-secondary/10 border border-secondary/20 p-6">
                    <div class="flex items-start gap-4">
                        <x-icon name="o-shield-check" class="h-6 text-secondary flex-shrink-0" />
                        <div class="space-y-1">
                            <div class="font-semibold text-base-content">Legalitas Terjamin</div>
                            <div class="text-sm text-base-content/70">
                                Memiliki IPP resmi dengan KBLI 46634 untuk perdagangan komoditas batuan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

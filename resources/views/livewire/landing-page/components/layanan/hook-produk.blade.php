<section class="py-20 bg-gradient-to-b from-base-200 to-base-100">
    <div class="container mx-auto max-w-7xl px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center space-y-4 mb-16" data-aos="fade-up">
            <span class="badge badge-accent badge-lg">Katalog Produk Kami</span>
            <h2 class="text-4xl lg:text-5xl font-bold text-base-content">
                Material Batuan Berkualitas
            </h2>
            <p class="text-lg text-base-content/70 max-w-2xl mx-auto">
                Menyediakan berbagai jenis material batuan dan konstruksi dengan kualitas terjamin dan harga kompetitif
            </p>
        </div>

        {{-- Products Preview Grid (4 produk unggulan) --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            {{-- Product 1: Batu Split 0,5 --}}
            <div data-aos="fade-up" data-aos-delay="100" class="h-full">
                <div class="card bg-base-100 hover:bg-base-200 transition-all duration-300 p-6 group h-full">
                    <div class="space-y-4">
                        <div
                            class="w-16 h-16 bg-primary/10 group-hover:bg-primary rounded-2xl flex items-center justify-center transition-colors">
                            <x-icon name="o-cube"
                                class="h-8 text-primary group-hover:text-primary-content transition-colors" />
                        </div>
                        <div class="space-y-2">
                            <span class="badge badge-primary badge-sm">Material Batuan</span>
                            <h3 class="text-xl font-bold text-base-content">Batu Split 0,5</h3>
                            <p class="text-sm text-base-content/70">
                                Ukuran 5-10 mm cocok untuk campuran aspal atau lapisan dasar paving block
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Product 2: Batu Split 2/3 --}}
            <div data-aos="fade-up" data-aos-delay="200" class="h-full">
                <div class="card bg-base-100 hover:bg-base-200 transition-all duration-300 p-6 group h-full">
                    <div class="space-y-4">
                        <div
                            class="w-16 h-16 bg-primary/10 group-hover:bg-primary rounded-2xl flex items-center justify-center transition-colors">
                            <x-icon name="o-cube"
                                class="h-8 text-primary group-hover:text-primary-content transition-colors" />
                        </div>
                        <div class="space-y-2">
                            <span class="badge badge-primary badge-sm">Material Batuan</span>
                            <h3 class="text-xl font-bold text-base-content">Batu Split 2/3</h3>
                            <p class="text-sm text-base-content/70">
                                Ukuran 20-30 mm untuk pengecoran struktural jalan beton dan jembatan
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Product 3: Abu Batu --}}
            <div data-aos="fade-up" data-aos-delay="300" class="h-full">
                <div class="card bg-base-100 hover:bg-base-200 transition-all duration-300 p-6 group h-full">
                    <div class="space-y-4">
                        <div
                            class="w-16 h-16 bg-secondary/10 group-hover:bg-secondary rounded-2xl flex items-center justify-center transition-colors">
                            <x-icon name="o-cube"
                                class="h-8 text-secondary group-hover:text-secondary-content transition-colors" />
                        </div>
                        <div class="space-y-2">
                            <span class="badge badge-secondary badge-sm">Material Batuan</span>
                            <h3 class="text-xl font-bold text-base-content">Abu Batu</h3>
                            <p class="text-sm text-base-content/70">
                                Untuk campuran aspal, bahan pengeras jalan, atau sebagai pengganti pasir
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Product 4: Pasir Silika --}}
            <div data-aos="fade-up" data-aos-delay="400" class="h-full">
                <div class="card bg-base-100 hover:bg-base-200 transition-all duration-300 p-6 group h-full">
                    <div class="space-y-4">
                        <div
                            class="w-16 h-16 bg-accent/10 group-hover:bg-accent rounded-2xl flex items-center justify-center transition-colors">
                            <x-icon name="o-cube"
                                class="h-8 text-accent group-hover:text-accent-content transition-colors" />
                        </div>
                        <div class="space-y-2">
                            <span class="badge badge-accent badge-sm">Material Khusus</span>
                            <h3 class="text-xl font-bold text-base-content">Pasir Silika</h3>
                            <p class="text-sm text-base-content/70">
                                Untuk industri semen, kaca, keramik, sandblasting, dan pengolahan air
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- CTA to Produk Page --}}
        <div class="text-center pt-12" data-aos="fade-up" data-aos-delay="500">
            <a href="{{ route('produk') }}" wire:navigate class="btn btn-primary btn-lg gap-2 shadow-lg group">
                <x-icon name="o-shopping-bag" class="h-5" />
                <span>Lihat Semua Produk</span>
                <x-icon name="o-arrow-right" class="h-5 group-hover:translate-x-1 transition-transform" />
            </a>
        </div>
    </div>
</section>

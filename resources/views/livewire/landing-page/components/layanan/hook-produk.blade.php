<section class="py-20 bg-gradient-to-b from-base-200 to-base-100">
    <div class="container mx-auto max-w-7xl px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center space-y-4 mb-16" data-aos="fade-up">
            <span class="badge badge-soft badge-accent badge-lg">{{ $this->getText($content['badge']) }}</span>
            <h2 class="text-4xl lg:text-5xl font-bold text-base-content">
                {{ $this->getText($content['title']) }}
            </h2>
            <p class="text-lg text-base-content/70 max-w-2xl mx-auto">
                {{ $this->getText($content['description']) }}
            </p>
        </div>

        {{-- Products Preview Grid (4 produk unggulan) --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            {{-- Product 1: Batu Split 0,5 --}}
            <div data-aos="fade-up" data-aos-delay="100" class="h-full">
                <div class="card bg-base-100 hover:shadow-2xl transition-all duration-300 overflow-hidden group h-full">
                    <div class="aspect-[4/3] overflow-hidden relative">
                        <img src="https://images.tokopedia.net/img/cache/700/product-1/2018/8/9/3708056/3708056_dc5d0dc1-1c1c-47f3-b7fa-48351a095d91_585_1040.jpg"
                            alt="{{ $this->getText($content['product1']['name']) }}"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-base-content/60 to-transparent lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-4 text-base-100 lg:translate-y-4 lg:group-hover:translate-y-0 lg:opacity-0 lg:group-hover:opacity-100 transition-all duration-300">
                            <span class="badge badge-primary badge-sm mb-2">{{ $this->getText($content['product1']['badge']) }}</span>
                            <h4 class="text-base font-bold">{{ $this->getText($content['product1']['name']) }}</h4>
                            <p class="text-xs mt-1">{{ $this->getText($content['product1']['description']) }}</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Product 2: Batu Split 2/3 --}}
            <div data-aos="fade-up" data-aos-delay="200" class="h-full">
                <div class="card bg-base-100 hover:shadow-2xl transition-all duration-300 overflow-hidden group h-full">
                    <div class="aspect-[4/3] overflow-hidden relative">
                        <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/102/MTA-145966152/no-brand_50-kg-nm-split-kerikil-batu-pecah-kandi_full02.jpg"
                            alt="{{ $this->getText($content['product2']['name']) }}"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-base-content/60 to-transparent lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-4 text-base-100 lg:translate-y-4 lg:group-hover:translate-y-0 lg:opacity-0 lg:group-hover:opacity-100 transition-all duration-300">
                            <span class="badge badge-primary badge-sm mb-2">{{ $this->getText($content['product2']['badge']) }}</span>
                            <h4 class="text-base font-bold">{{ $this->getText($content['product2']['name']) }}</h4>
                            <p class="text-xs mt-1">{{ $this->getText($content['product2']['description']) }}</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Product 3: Abu Batu --}}
            <div data-aos="fade-up" data-aos-delay="300" class="h-full">
                <div class="card bg-base-100 hover:shadow-2xl transition-all duration-300 overflow-hidden group h-full">
                    <div class="aspect-[4/3] overflow-hidden relative">
                        <img src="https://www.ditaanugrahperkasa.com/storage/2019/02/Abu-Batu-small.jpg"
                            alt="{{ $this->getText($content['product3']['name']) }}"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-base-content/60 to-transparent lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-4 text-base-100 lg:translate-y-4 lg:group-hover:translate-y-0 lg:opacity-0 lg:group-hover:opacity-100 transition-all duration-300">
                            <span class="badge badge-secondary badge-sm mb-2">{{ $this->getText($content['product3']['badge']) }}</span>
                            <h4 class="text-base font-bold">{{ $this->getText($content['product3']['name']) }}</h4>
                            <p class="text-xs mt-1">{{ $this->getText($content['product3']['description']) }}</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Product 4: Pasir Silika --}}
            <div data-aos="fade-up" data-aos-delay="400" class="h-full">
                <div class="card bg-base-100 hover:shadow-2xl transition-all duration-300 overflow-hidden group h-full">
                    <div class="aspect-[4/3] overflow-hidden relative">
                        <img src="https://alaskandang.com/socoron/2023/09/10.-Manfaat-Pasir-Silika-Kasar-dalam-Berbagai-Industri-miningvalleys.com_.jpg"
                            alt="{{ $this->getText($content['product4']['name']) }}"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-base-content/60 to-transparent lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-4 text-base-100 lg:translate-y-4 lg:group-hover:translate-y-0 lg:opacity-0 lg:group-hover:opacity-100 transition-all duration-300">
                            <span class="badge badge-accent badge-sm mb-2">{{ $this->getText($content['product4']['badge']) }}</span>
                            <h4 class="text-base font-bold">{{ $this->getText($content['product4']['name']) }}</h4>
                            <p class="text-xs mt-1">{{ $this->getText($content['product4']['description']) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- CTA to Produk Page --}}
        <div class="text-center pt-12" data-aos="fade-up" data-aos-delay="500">
            <a href="{{ route('produk') }}" wire:navigate class="btn btn-primary btn-lg gap-2 shadow-lg group">
                <span>{{ $this->getText($content['cta']) }}</span>
                <x-icon name="o-arrow-right" class="h-5 group-hover:translate-x-1 transition-transform" />
            </a>
        </div>
    </div>
</section>

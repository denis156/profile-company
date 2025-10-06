<section class="py-20 bg-base-200">
    <div class="container mx-auto max-w-7xl px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center space-y-4 mb-16" data-aos="fade-up">
            <span class="badge badge-primary badge-lg">{{ $this->getText($content['badge']) }}</span>
            <h2 class="text-4xl lg:text-5xl font-bold text-base-content">
                {{ $this->getText($content['heading']) }}
            </h2>
            <p class="text-lg text-base-content/70 max-w-2xl mx-auto">
                {{ $this->getText($content['description']) }}
            </p>
        </div>

        {{-- Products Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            {{-- Product 1: Batu Split 0,5 --}}
            <div data-aos="fade-up" data-aos-delay="100">
                <div
                    class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden h-full">
                    <figure class="aspect-[4/3] overflow-hidden">
                        <img src="https://images.tokopedia.net/img/cache/700/product-1/2018/8/9/3708056/3708056_dc5d0dc1-1c1c-47f3-b7fa-48351a095d91_585_1040.jpg"
                            alt="{{ $this->getText($content['product1']['alt']) }}"
                            class="w-full h-full object-cover hover:scale-110 transition-transform duration-300" />
                    </figure>
                    <div class="card-body p-6">
                        <div class="flex items-center justify-between mb-2">
                            <span class="badge badge-primary">01</span>
                            <span class="badge badge-neutral">{{ $this->getText($content['categories'][$content['product1']['category']]) }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-base-content">{{ $this->getText($content['product1']['title']) }}</h3>
                        <p class="text-sm text-base-content/70 leading-relaxed">
                            {{ $this->getText($content['product1']['description']) }}
                        </p>
                    </div>
                </div>
            </div>

            {{-- Product 2: Batu Split 1/2 --}}
            <div data-aos="fade-up" data-aos-delay="200">
                <div
                    class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden h-full">
                    <figure class="aspect-[4/3] overflow-hidden">
                        <img src="https://www.hargapasir.com/wp-content/uploads/2023/06/jenis-batu-split.jpg"
                            alt="{{ $this->getText($content['product2']['alt']) }}"
                            class="w-full h-full object-cover hover:scale-110 transition-transform duration-300" />
                    </figure>
                    <div class="card-body p-6">
                        <div class="flex items-center justify-between mb-2">
                            <span class="badge badge-primary">02</span>
                            <span class="badge badge-neutral">{{ $this->getText($content['categories'][$content['product2']['category']]) }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-base-content">{{ $this->getText($content['product2']['title']) }}</h3>
                        <p class="text-sm text-base-content/70 leading-relaxed">
                            {{ $this->getText($content['product2']['description']) }}
                        </p>
                    </div>
                </div>
            </div>

            {{-- Product 3: Batu Split 2/3 --}}
            <div data-aos="fade-up" data-aos-delay="300">
                <div
                    class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden h-full">
                    <figure class="aspect-[4/3] overflow-hidden">
                        <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/102/MTA-145966152/no-brand_50-kg-nm-split-kerikil-batu-pecah-kandi_full02.jpg"
                            alt="{{ $this->getText($content['product3']['alt']) }}"
                            class="w-full h-full object-cover hover:scale-110 transition-transform duration-300" />
                    </figure>
                    <div class="card-body p-6">
                        <div class="flex items-center justify-between mb-2">
                            <span class="badge badge-primary">03</span>
                            <span class="badge badge-neutral">{{ $this->getText($content['categories'][$content['product3']['category']]) }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-base-content">{{ $this->getText($content['product3']['title']) }}</h3>
                        <p class="text-sm text-base-content/70 leading-relaxed">
                            {{ $this->getText($content['product3']['description']) }}
                        </p>
                    </div>
                </div>
            </div>

            {{-- Product 4: Batu Split 4,9 --}}
            <div data-aos="fade-up" data-aos-delay="100">
                <div
                    class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden h-full">
                    <figure class="aspect-[4/3] overflow-hidden">
                        <img src="https://troben.id/blog/wp-content/uploads/2024/01/jenis-jenis-batu-kali-1-truk.jpg"
                            alt="{{ $this->getText($content['product4']['alt']) }}"
                            class="w-full h-full object-cover hover:scale-110 transition-transform duration-300" />
                    </figure>
                    <div class="card-body p-6">
                        <div class="flex items-center justify-between mb-2">
                            <span class="badge badge-primary">04</span>
                            <span class="badge badge-neutral">{{ $this->getText($content['categories'][$content['product4']['category']]) }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-base-content">{{ $this->getText($content['product4']['title']) }}</h3>
                        <p class="text-sm text-base-content/70 leading-relaxed">
                            {{ $this->getText($content['product4']['description']) }}
                        </p>
                    </div>
                </div>
            </div>

            {{-- Product 5: Abu Batu --}}
            <div data-aos="fade-up" data-aos-delay="200">
                <div
                    class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden h-full">
                    <figure class="aspect-[4/3] overflow-hidden">
                        <img src="https://www.ditaanugrahperkasa.com/storage/2019/02/Abu-Batu-small.jpg" alt="{{ $this->getText($content['product5']['alt']) }}"
                            class="w-full h-full object-cover hover:scale-110 transition-transform duration-300" />
                    </figure>
                    <div class="card-body p-6">
                        <div class="flex items-center justify-between mb-2">
                            <span class="badge badge-primary">05</span>
                            <span class="badge badge-neutral">{{ $this->getText($content['categories'][$content['product5']['category']]) }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-base-content">{{ $this->getText($content['product5']['title']) }}</h3>
                        <p class="text-sm text-base-content/70 leading-relaxed">
                            {{ $this->getText($content['product5']['description']) }}
                        </p>
                    </div>
                </div>
            </div>

            {{-- Product 6: Lapisan Pondasi Agregat (LPA) --}}
            <div data-aos="fade-up" data-aos-delay="300">
                <div
                    class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden h-full">
                    <figure class="aspect-[4/3] overflow-hidden">
                        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiYm1RNvsfzt7TAZ9ckWaMsdT-ce2thXqYEjrsVVuCEssKoBOpzR2ne-F2D7JnWBGx9-6-afE5EbUN2aXtZP3xWeWb0S9tMFAXYVlplvAGsVpfMiYkNBVOuKDLSFvaYD9kqhXUdnNottBU/s1600/a.JPG"
                            alt="{{ $this->getText($content['product6']['alt']) }}"
                            class="w-full h-full object-cover hover:scale-110 transition-transform duration-300" />
                    </figure>
                    <div class="card-body p-6">
                        <div class="flex items-center justify-between mb-2">
                            <span class="badge badge-primary">06</span>
                            <span class="badge badge-neutral">{{ $this->getText($content['categories'][$content['product6']['category']]) }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-base-content">{{ $this->getText($content['product6']['title']) }}</h3>
                        <p class="text-sm text-base-content/70 leading-relaxed">
                            {{ $this->getText($content['product6']['description']) }}
                        </p>
                    </div>
                </div>
            </div>

            {{-- Product 7: Lapisan Pondasi Bawah (LPB) --}}
            <div data-aos="fade-up" data-aos-delay="100">
                <div
                    class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden h-full">
                    <figure class="aspect-[4/3] overflow-hidden">
                        <img src="https://www.jagel.id/api/listimage/LPB-LapisPondasiBawah--0-691470314346205fd4cdc39ff402.14390682.jpg"
                            alt="{{ $this->getText($content['product7']['alt']) }}"
                            class="w-full h-full object-cover hover:scale-110 transition-transform duration-300" />
                    </figure>
                    <div class="card-body p-6">
                        <div class="flex items-center justify-between mb-2">
                            <span class="badge badge-primary">07</span>
                            <span class="badge badge-neutral">{{ $this->getText($content['categories'][$content['product7']['category']]) }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-base-content">{{ $this->getText($content['product7']['title']) }}</h3>
                        <p class="text-sm text-base-content/70 leading-relaxed">
                            {{ $this->getText($content['product7']['description']) }}
                        </p>
                    </div>
                </div>
            </div>

            {{-- Product 8: Pasir Silika --}}
            <div data-aos="fade-up" data-aos-delay="200">
                <div
                    class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden h-full">
                    <figure class="aspect-[4/3] overflow-hidden">
                        <img src="https://alaskandang.com/socoron/2023/09/10.-Manfaat-Pasir-Silika-Kasar-dalam-Berbagai-Industri-miningvalleys.com_.jpg"
                            alt="{{ $this->getText($content['product8']['alt']) }}"
                            class="w-full h-full object-cover hover:scale-110 transition-transform duration-300" />
                    </figure>
                    <div class="card-body p-6">
                        <div class="flex items-center justify-between mb-2">
                            <span class="badge badge-primary">08</span>
                            <span class="badge badge-neutral">{{ $this->getText($content['categories'][$content['product8']['category']]) }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-base-content">{{ $this->getText($content['product8']['title']) }}</h3>
                        <p class="text-sm text-base-content/70 leading-relaxed">
                            {{ $this->getText($content['product8']['description']) }}
                        </p>
                    </div>
                </div>
            </div>

            {{-- Product 9: Pasir Sungai --}}
            <div data-aos="fade-up" data-aos-delay="300">
                <div
                    class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden h-full">
                    <figure class="aspect-[4/3] overflow-hidden">
                        <img src="https://asiacon.co.id/wp-content/uploads/2018/01/fungsi-pasir-beton.jpg"
                            alt="{{ $this->getText($content['product9']['alt']) }}"
                            class="w-full h-full object-cover hover:scale-110 transition-transform duration-300" />
                    </figure>
                    <div class="card-body p-6">
                        <div class="flex items-center justify-between mb-2">
                            <span class="badge badge-primary">09</span>
                            <span class="badge badge-neutral">{{ $this->getText($content['categories'][$content['product9']['category']]) }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-base-content">{{ $this->getText($content['product9']['title']) }}</h3>
                        <p class="text-sm text-base-content/70 leading-relaxed">
                            {{ $this->getText($content['product9']['description']) }}
                        </p>
                    </div>
                </div>
            </div>

            {{-- Product 10: Gravel Silika --}}
            <div data-aos="fade-up" data-aos-delay="100">
                <div
                    class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden h-full">
                    <figure class="aspect-[4/3] overflow-hidden">
                        <img src="https://aspenfilter.com/media/catalog/product/cache/23/image/1000x1231/9df78eab33525d08d6e5fb8d27136e95/p/a/pasir_silika_gravel.jpg"
                            alt="{{ $this->getText($content['product10']['alt']) }}"
                            class="w-full h-full object-cover hover:scale-110 transition-transform duration-300" />
                    </figure>
                    <div class="card-body p-6">
                        <div class="flex items-center justify-between mb-2">
                            <span class="badge badge-primary">10</span>
                            <span class="badge badge-neutral">{{ $this->getText($content['categories'][$content['product10']['category']]) }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-base-content">{{ $this->getText($content['product10']['title']) }}</h3>
                        <p class="text-sm text-base-content/70 leading-relaxed">
                            {{ $this->getText($content['product10']['description']) }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gradient-to-b from-base-100 to-base-200">
    <div class="container mx-auto max-w-7xl px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center space-y-4 mb-16" data-aos="fade-up">
            <span class="badge badge-accent badge-lg">Dokumentasi Kegiatan</span>
            <h2 class="text-4xl lg:text-5xl font-bold text-base-content">
                Galeri
                <span class="text-primary">Pekerjaan Kami</span>
            </h2>
            <p class="text-lg text-base-content/70 max-w-2xl mx-auto">
                Lihat dokumentasi kegiatan operasional dan proyek-proyek yang telah kami kerjakan bersama mitra
            </p>
        </div>

        {{-- Gallery Preview Grid (3 foto unggulan) --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Photo 1: Stone Crusher Operation --}}
            <div data-aos="fade-up" data-aos-delay="100" class="h-full">
                <div
                    class="card bg-base-100 hover:shadow-2xl transition-all duration-300 overflow-hidden group h-full">
                    <div class="aspect-[4/3] overflow-hidden relative">
                        <video
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                            autoplay
                            loop
                            muted
                            playsinline>
                            <source src="{{ asset('video/vid_2.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-base-content/60 to-transparent lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 right-0 p-6 text-base-100 lg:translate-y-4 lg:group-hover:translate-y-0 lg:opacity-0 lg:group-hover:opacity-100 transition-all duration-300">
                            <h4 class="text-lg font-bold">Operasional Tongkang</h4>
                            <p class="text-sm mt-1">Tim ahli kami mengoperasikan excavator untuk distribusi material pasir yang efisien di kapal tongkang</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Photo 2: Loading Material --}}
            <div data-aos="fade-up" data-aos-delay="200" class="h-full">
                <div
                    class="card bg-base-100 hover:shadow-2xl transition-all duration-300 overflow-hidden group h-full">
                    <div class="aspect-[4/3] overflow-hidden relative">
                        <img src="{{ asset('image/pic_6.jpeg') }}" alt="Material Loading"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-base-content/60 to-transparent lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 right-0 p-6 text-base-100 lg:translate-y-4 lg:group-hover:translate-y-0 lg:opacity-0 lg:group-hover:opacity-100 transition-all duration-300">
                            <h4 class="text-lg font-bold">Distribusi Material Premium</h4>
                            <p class="text-sm mt-1">Sistem logistik terintegrasi untuk pengiriman semen dari truck menuju fasilitas penyimpanan modern</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Photo 3: Cement Loading --}}
            <div data-aos="fade-up" data-aos-delay="300" class="h-full">
                <div
                    class="card bg-base-100 hover:shadow-2xl transition-all duration-300 overflow-hidden group h-full">
                    <div class="aspect-[4/3] overflow-hidden relative">
                        <img src="{{ asset('image/pic_7.svg') }}" alt="Cement Loading"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-base-content/60 to-transparent lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 right-0 p-6 text-base-100 lg:translate-y-4 lg:group-hover:translate-y-0 lg:opacity-0 lg:group-hover:opacity-100 transition-all duration-300">
                            <h4 class="text-lg font-bold">Operasi Dermaga Profesional</h4>
                            <p class="text-sm mt-1">Transfer material semen berkualitas dari tongkang ke armada transportasi dengan standar keamanan tinggi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- CTA to Galeri Page --}}
        <div class="text-center pt-12" data-aos="fade-up" data-aos-delay="500">
            <a href="{{ route('galeri') }}" wire:navigate class="btn btn-primary btn-lg gap-2 shadow-lg group">
                <x-icon name="o-photo" class="h-5" />
                <span>Lihat Semua Dokumentasi</span>
                <x-icon name="o-arrow-right" class="h-5 group-hover:translate-x-1 transition-transform" />
            </a>
        </div>
    </div>
</section>

<section class="py-20 bg-gradient-to-b from-base-300 to-base-100">
    <div class="container mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            {{-- Story Content --}}
            <div class="space-y-8" data-aos="fade-right">
                <div class="space-y-4">
                    <span class="badge badge-primary badge-lg">Perjalanan Kami</span>
                    <h2 class="text-4xl lg:text-5xl font-bold text-base-content">
                        Dari Visi Menjadi
                        <span class="text-primary">Kenyataan</span>
                    </h2>
                </div>

                <div class="space-y-6 text-base-content/80">
                    <p class="text-lg leading-relaxed">
                        PT. Fathiyah Nugraha Group didirikan pada tanggal <span
                            class="font-semibold text-primary">22 Agustus 2022</span>
                        dengan visi menjadi perusahaan terpercaya di bidang jasa konstruksi dan perdagangan material batuan.
                    </p>
                    <p class="text-lg leading-relaxed">
                        Pada <span class="font-semibold text-primary">14 Februari 2023</span>, kami memperoleh
                        Izin Pengangkutan dan Penjualan Komoditas Batuan (IPP) dengan SK No. 230822004081700001,
                        menandai tonggak penting dalam legalitas dan kredibilitas perusahaan.
                    </p>
                    <p class="text-lg leading-relaxed">
                        Berlokasi strategis di <span class="font-semibold">Kendari, Sulawesi Tenggara</span>,
                        kami terus berkembang dengan dukungan 23+ unit armada modern dan tim profesional yang berpengalaman.
                    </p>
                </div>

                {{-- Timeline --}}
                <div class="space-y-4 pt-4">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 bg-primary/10 rounded-xl flex items-center justify-center flex-shrink-0">
                            <x-icon name="o-rocket-launch" class="h-8 text-primary" />
                        </div>
                        <div>
                            <div class="font-semibold text-base-content">22 Agustus 2022 - Pendirian</div>
                            <div class="text-sm text-base-content/60">Awal perjalanan bisnis konstruksi</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 bg-accent/10 rounded-xl flex items-center justify-center flex-shrink-0">
                            <x-icon name="o-shield-check" class="h-8 text-accent" />
                        </div>
                        <div>
                            <div class="font-semibold text-base-content">14 Februari 2023 - Sertifikasi IPP</div>
                            <div class="text-sm text-base-content/60">Legalitas resmi perdagangan batuan</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Story Image --}}
            <div class="relative" data-aos="fade-left">
                <div class="relative z-10">
                    <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('image/pic_2.jpeg') }}"
                            class="w-full h-full object-cover" />
                    </div>
                </div>

                {{-- Floating Card --}}
                <div class="absolute -bottom-8 -left-8 bg-base-100 rounded-2xl shadow-2xl p-6 max-w-xs z-20">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 bg-primary rounded-xl flex items-center justify-center flex-shrink-0">
                            <span class="text-3xl font-bold text-primary-content">3+</span>
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-base-content">Tahun Pengalaman</div>
                            <div class="text-xs text-base-content/60">Melayani dengan dedikasi</div>
                        </div>
                    </div>
                </div>

                {{-- Decorative Element --}}
                <div class="absolute -top-12 -right-12 w-64 h-64 bg-primary/10 rounded-full blur-3xl -z-10"></div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gradient-to-b from-base-300 to-base-100">
    <div class="container mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            {{-- Content --}}
            <div class="space-y-8" data-aos="fade-right">
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center">
                            <x-icon name="o-wrench-screwdriver" class="h-6 text-primary" />
                        </div>
                        <span class="badge badge-primary badge-lg">Layanan Utama</span>
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-base-content">
                        <span class="text-primary">Jasa Konstruksi</span>
                        Profesional
                    </h2>
                    <p class="text-lg text-base-content/70 leading-relaxed">
                        Layanan konstruksi dengan standar kualitas tinggi, didukung armada modern dan tim
                        berpengalaman untuk menyelesaikan proyek Anda tepat waktu.
                    </p>
                </div>

                {{-- Features --}}
                <div class="space-y-4">
                    <h3 class="text-xl font-semibold text-base-content">Keunggulan Kami:</h3>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex items-start gap-3">
                            <x-icon name="o-check-circle" class="h-6 text-primary flex-shrink-0 mt-0.5" />
                            <div>
                                <div class="font-medium text-base-content">Armada Lengkap & Modern</div>
                                <div class="text-sm text-base-content/60">2 Excavator, 9 Truck, 2 Crusher, dan
                                    10 kendaraan operasional</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <x-icon name="o-check-circle" class="h-6 text-primary flex-shrink-0 mt-0.5" />
                            <div>
                                <div class="font-medium text-base-content">Tim Profesional Berpengalaman</div>
                                <div class="text-sm text-base-content/60">3+ tahun pengalaman di bidang konstruksi
                                </div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <x-icon name="o-check-circle" class="h-6 text-primary flex-shrink-0 mt-0.5" />
                            <div>
                                <div class="font-medium text-base-content">Manajemen Proyek Terintegrasi</div>
                                <div class="text-sm text-base-content/60">Monitoring dan kontrol kualitas di setiap
                                    tahap</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <x-icon name="o-check-circle" class="h-6 text-primary flex-shrink-0 mt-0.5" />
                            <div>
                                <div class="font-medium text-base-content">Tepat Waktu & Budget</div>
                                <div class="text-sm text-base-content/60">Komitmen menyelesaikan proyek sesuai
                                    timeline</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Image --}}
            <div class="relative" data-aos="fade-left">
                <div class="relative z-10">
                    <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('image/pic_5.png') }}" alt="Jasa Konstruksi"
                            class="w-full h-full object-cover" />
                    </div>
                </div>

                {{-- Floating Stats --}}
                <div class="absolute -bottom-6 -right-6 bg-base-100 rounded-2xl shadow-2xl p-6 max-w-xs z-20">
                    <div class="text-center space-y-2">
                        <div class="text-4xl font-bold text-primary">23+</div>
                        <div class="text-sm text-base-content/60">Unit Armada Siap Operasi</div>
                    </div>
                </div>

                {{-- Decorative Element --}}
                <div class="absolute -top-12 -left-12 w-64 h-64 bg-primary/10 rounded-full blur-3xl -z-10"></div>
            </div>
        </div>
    </div>
</section>

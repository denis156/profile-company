<div>
    {{-- Hero Section - Coming Soon --}}
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-b from-base-100 via-base-200 to-base-100">
        {{-- Background Pattern --}}
        <livewire:landing-page.components.bg-pattren />

        <div class="container mx-auto max-w-7xl px-6 lg:px-8 py-24 relative z-10">
            <div class="max-w-4xl mx-auto text-center space-y-8">
                {{-- Coming Soon Content --}}
                <div class="space-y-6" data-aos="fade-up">
                    {{-- Badge --}}
                    <span class="badge badge-primary badge-soft badge-lg"><div aria-label="status" class="status status-info status-md animate-pulse"></div>Segera Hadir</span>

                    {{-- Title --}}
                    <h1 class="text-5xl lg:text-6xl font-bold text-base-content">
                        Hubungi Kami
                        <p class="text-primary mt-4">Akan Segera Hadir</p>
                    </h1>

                    {{-- Description --}}
                    <p class="text-xl text-base-content/70 max-w-3xl mx-auto leading-relaxed break-words">
                        Ingin menghubungi kami? Tekan tombol di pojok kanan bawah untuk mengirim pesan melalui WhatsApp atau Email sesuai pilihan Anda
                    </p>

                    {{-- CTA Hint --}}
                    <div class="flex items-center justify-center gap-3 pt-4" data-aos="fade-up" data-aos-delay="100">
                        <x-icon name="o-arrow-down-right" class="h-6 text-primary animate-bounce" />
                        <p class="text-lg font-semibold text-primary">Lihat di pojok kanan bawah</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

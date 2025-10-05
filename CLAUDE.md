# CLAUDE.md

File ini memberikan panduan kepada Claude Code (claude.ai/code) ketika bekerja dengan kode di repository ini.

## Ringkasan Proyek

Ini adalah aplikasi **Laravel 12 + Livewire 3** untuk profil perusahaan menggunakan:
- **TailwindCSS 4** dengan **DaisyUI 5** untuk styling
- **MaryUI 2** library komponen untuk UI yang sudah jadi
- **Vite 7** untuk bundling aset
- **Pest 4** untuk testing

## Perintah Development

### Menjalankan Development Server
```bash
composer dev
```
Perintah ini menjalankan secara bersamaan:
- `php artisan serve` - Server Laravel
- `php artisan queue:listen` - Queue worker
- `php artisan pail` - Log viewer
- `npm run dev` - Vite dev server dengan HMR

### Perintah Individual
```bash
php artisan serve          # Jalankan Laravel server saja
npm run dev                # Jalankan Vite saja
npm run build              # Build untuk production
```

### Testing
```bash
composer test              # Jalankan semua test dengan Pest
php artisan test           # Perintah test alternatif
php artisan test --filter NamaTest  # Jalankan test tertentu
```

### Kualitas Kode
```bash
vendor/bin/pint            # Format kode dengan Laravel Pint
```

## Arsitektur

### Stack Frontend
- **TailwindCSS 4**: Framework CSS utility-first
- **DaisyUI 5**: Library komponen dibangun di atas Tailwind
- **MaryUI 2**: Komponen Laravel Blade dengan integrasi Livewire
- **Livewire 3**: Framework full-stack untuk interface dinamis

### Direktori Utama
- `app/Livewire/` - Komponen Livewire (logika PHP)
- `resources/views/livewire/` - View komponen Livewire (template Blade)
- `resources/views/components/` - Komponen Blade
- `resources/css/` - File CSS termasuk konfigurasi tema
- `resources/js/` - File JavaScript

### Konfigurasi Tema
File tema terletak di `resources/css/`:
- `app.css` - CSS utama dengan import TailwindCSS, DaisyUI, dan MaryUI
- `daisyui.css` - Definisi tema DaisyUI custom (tema light & dark)

DaisyUI dikonfigurasi dengan:
```css
@plugin "daisyui" {
    themes: light --default, dark --prefersdark;
}
```

Tema custom didefinisikan di `resources/css/daisyui.css` menggunakan syntax `@plugin "daisyui/theme"`.

---

## STRUKTUR HALAMAN COMPANY PROFILE

Aplikasi ini adalah **Company Profile untuk PT. FATHIYAH NUGRAHA GROUP** dengan 8 halaman utama menggunakan **Livewire Wire:Navigate** untuk SPA experience.

### Halaman Utama

**1. 🏠 Beranda (`/`)**
- Hero section dengan tagline dan CTA utama
- Quick overview perusahaan
- Statistik kunci (tahun berdiri, proyek selesai, klien)
- Ringkasan 3 layanan utama dalam cards
- Call to action untuk kontak

**2. 🏢 Tentang Kami (`/tentang-kami`)**
- **Profil Perusahaan**: Sejarah dan deskripsi
- **Visi & Misi**: Vision statement dan mission points
- **Management & Organisasi**: Struktur organisasi chart, profil key persons (Direktur, Komisaris, Manajer)
- **Legalitas**: Dokumen legal (Akta Pendirian, NPWP, NIB, SIUP, TDP, Sertifikat) dalam card layout

**3. 💼 Layanan (`/layanan`)**
- Overview layanan perusahaan
- Detail 3 layanan utama:
  - **Jasa Konstruksi**: Scope, keahlian, equipment, track record
  - **Perdagangan Umum**: Jenis produk, kategori, network supplier, area distribusi
  - **Konsultan Bisnis**: Bidang konsultasi, metodologi, expertise, success stories
- Proses/cara kerja
- Keunggulan kompetitif

**4. 📦 Produk (`/produk`)**
- Katalog produk yang diperdagangkan
- Filter by category
- Setiap produk: foto, nama, spesifikasi, deskripsi
- Download catalog (PDF) button
- Contact for quotation CTA

**5. 🤝 Mitra (`/mitra`)**
- **Klien Kami**: Logo-logo klien dalam grid layout
- **Partner Bisnis**: Principal/supplier, partner strategis, asosiasi/membership
- **Testimoni**: Review dari klien dengan foto/logo perusahaan, rating/feedback

**6. 🎯 Portofolio (`/portofolio`)**
- Gallery proyek yang sudah dikerjakan
- Filter by category (Konstruksi/Perdagangan/Konsultan), year, client type
- Setiap proyek: foto/gallery, nama proyek, klien, tahun, deskripsi, nilai kontrak (opsional)
- Lightbox/modal untuk detail proyek

**7. 📸 Dokumentasi (`/dokumentasi`)**
- **Galeri Foto**: Dokumentasi kegiatan perusahaan, progress proyek, event, CSR activities
- **Video** (opsional): Company profile video, project walkthrough, testimonial
- **News & Updates**: Berita terbaru, press release, pengumuman
- Gallery grid dengan lightbox

**8. 📞 Kontak (`/kontak`)**
- Form kontak interaktif (Nama, Email, Telepon, Pesan)
- Informasi kontak: Alamat kantor pusat & cabang, telepon/fax, email, WhatsApp, jam operasional
- Google Maps embed
- Social media links
- Download company profile (PDF)

### Struktur File Halaman

```
app/Livewire/LandingPage/
├── Beranda.php
├── TentangKami.php
├── Layanan.php
├── Produk.php
├── Mitra.php
├── Portofolio.php
├── Dokumentasi.php
└── Kontak.php

resources/views/livewire/landing-page/
├── beranda.blade.php
├── tentang-kami.blade.php
├── layanan.blade.php
├── produk.blade.php
├── mitra.blade.php
├── portofolio.blade.php
├── dokumentasi.blade.php
├── kontak.blade.php
└── components/
    ├── navbar.blade.php (shared - navigasi utama)
    ├── footer.blade.php (shared - footer dengan info perusahaan)
    ├── whatsapp-float.blade.php (floating WhatsApp button)
    └── theme-toggle.blade.php (dark/light mode switcher)
```

### Routes

```php
Route::get('/', Beranda::class)->name('beranda');
Route::get('/tentang-kami', TentangKami::class)->name('tentang-kami');
Route::get('/layanan', Layanan::class)->name('layanan');
Route::get('/produk', Produk::class)->name('produk');
Route::get('/mitra', Mitra::class)->name('mitra');
Route::get('/portofolio', Portofolio::class)->name('portofolio');
Route::get('/dokumentasi', Dokumentasi::class)->name('dokumentasi');
Route::get('/kontak', Kontak::class)->name('kontak');
```

### Navigasi

Navbar menggunakan `wire:navigate` untuk transisi SPA yang smooth:
```html
<a href="/" wire:navigate>Beranda</a>
<a href="/tentang-kami" wire:navigate>Tentang Kami</a>
<a href="/layanan" wire:navigate>Layanan</a>
<a href="/produk" wire:navigate>Produk</a>
<a href="/mitra" wire:navigate>Mitra</a>
<a href="/portofolio" wire:navigate>Portofolio</a>
<a href="/dokumentasi" wire:navigate>Dokumentasi</a>
<a href="/kontak" wire:navigate>Kontak</a>
```

### Komponen Shared

Komponen yang muncul di semua halaman:
- **Navbar**: Navigasi utama dengan menu dan CTA button
- **Footer**: Info perusahaan, quick links, sosial media, copyright
- **WhatsApp Float**: Floating button untuk chat WhatsApp langsung
- **Theme Toggle**: Switch antara light dan dark mode

### Prioritas Development

**Phase 1 - Core (Must Have):**
1. ✅ Beranda
2. ✅ Tentang Kami (dengan Visi Misi, Management, Legalitas)
3. ✅ Layanan
4. ✅ Kontak

**Phase 2 - Important:**
5. ✅ Produk
6. ✅ Mitra
7. ✅ Portofolio

**Phase 3 - Nice to Have:**
8. ✅ Dokumentasi Kegiatan

---

## PRINSIP DESAIN UI/UX

**PENTING**: Ketika mendesain atau coding komponen UI, kamu HARUS mengikuti prinsip UI/UX profesional ini secara konsisten.

### 1. SISTEM 8-POINT GRID

**Aturan**: Semua spacing, padding, margin, dan ukuran elemen HARUS kelipatan **8px**.

**Nilai yang diperbolehkan**: 8, 16, 24, 32, 40, 48, 56, 64, 80, 96, 104, 112, 120, dst.

**Kenapa?**
- Memastikan konsistensi di semua ukuran layar
- Mayoritas resolusi layar bisa dibagi 8
- Kolaborasi lebih mudah antara designer dan developer
- Desain profesional dan scalable

**Di TailwindCSS**:
```html
<!-- ✅ BENAR -->
<div class="p-6">      <!-- 24px padding -->
<div class="m-8">      <!-- 32px margin -->
<div class="gap-4">    <!-- 16px gap -->
<div class="h-12">     <!-- 48px height -->

<!-- ❌ SALAH -->
<div class="p-[15px]"> <!-- Nilai random -->
<div class="m-[23px]"> <!-- Tidak bisa dibagi 8 -->
```

**Skala Spacing (TailwindCSS)**:
- `1` = 4px (untuk penyesuaian halus)
- `2` = 8px ✅
- `3` = 12px (bisa diterima untuk 4-point grid)
- `4` = 16px ✅
- `5` = 20px
- `6` = 24px ✅
- `8` = 32px ✅
- `10` = 40px ✅
- `12` = 48px ✅
- `16` = 64px ✅
- `20` = 80px ✅
- `24` = 96px ✅
- `32` = 128px ✅

**Alternatif**: Gunakan **4-point grid** (4, 8, 12, 16, 20, 24, dst) untuk interface yang lebih padat yang memerlukan kontrol lebih detail.

---

### 2. ATURAN WARNA 60-30-10

**Aturan**: Distribusikan warna di desain kamu sesuai proporsi ini:
- **60%** → Warna dominan (biasanya netral/background)
- **30%** → Warna sekunder (typography, ikon, elemen pendukung)
- **10%** → Warna aksen (CTA, highlight, emphasis)

**Aplikasi**:
```html
<!-- 60% - Background/Warna Base -->
<body class="bg-base-100 text-base-content">

<!-- 30% - Warna brand primary untuk section, heading -->
<section class="bg-primary text-primary-content">
<h1 class="text-primary">

<!-- 10% - Aksen untuk CTA dan aksi penting -->
<button class="btn btn-accent">Tombol Aksi</button>
<span class="badge badge-accent">Baru</span>
```

**Distribusi Warna**:
- Dominan (60%): `base-100`, `base-200`, `base-300`, `base-content`
- Sekunder (30%): `primary`, `secondary`, heading, ikon
- Aksen (10%): `accent`, tombol, highlight, elemen penting

---

### 3. ATURAN SPACING INTERNAL ≤ EKSTERNAL

**Aturan**: Padding (spacing internal) harus **lebih kecil atau sama dengan** margin (spacing eksternal).

**Kenapa?**: Menciptakan ruang bernapas visual dan perbedaan yang jelas antara elemen yang dikelompokkan.

**Contoh**:
```html
<!-- ✅ BENAR -->
<div class="card p-6 m-8">     <!-- padding 24px ≤ margin 32px -->
<div class="card p-8 mb-12">   <!-- padding 32px ≤ margin 48px -->

<!-- ❌ SALAH -->
<div class="card p-8 m-4">     <!-- padding 32px > margin 16px -->
```

**Spacing Section**:
```html
<!-- Section konten -->
<section class="px-6 py-16 mb-20">    <!-- Padding internal ≤ Margin eksternal -->
<div class="card p-6 gap-4 mb-8">     <!-- Padding internal card ≤ gap ≤ margin -->
```

---

### 4. HIERARKI TIPOGRAFI

**Aturan**: Tetapkan skala tipografi yang jelas dan konsisten menggunakan ukuran, berat, dan spacing yang tepat.

**Definisi Skala**:
```css
/* Display/Hero */
text-5xl / text-6xl (48-64px) - font-bold (700)

/* H1 */
text-3xl / text-4xl (30-36px) - font-bold (700)

/* H2 */
text-2xl / text-3xl (24-30px) - font-semibold (600)

/* H3 */
text-xl / text-2xl (20-24px) - font-semibold (600)

/* H4 */
text-lg / text-xl (18-20px) - font-medium (500)

/* Body Besar */
text-lg (18px) - font-normal (400)

/* Body Regular (dasar) */
text-base (16px) - font-normal (400)

/* Body Kecil */
text-sm (14px) - font-normal (400)

/* Caption */
text-xs (12px) - font-normal (400)
```

**Line Height**:
```html
<p class="leading-relaxed">    <!-- 1.625 untuk body text -->
<p class="leading-normal">     <!-- 1.5 untuk body text -->
<h1 class="leading-tight">     <!-- 1.25 untuk heading -->
<h1 class="leading-none">      <!-- 1 untuk heading besar -->
```

**Implementasi**:
```html
<!-- Section Hero -->
<h1 class="text-5xl font-bold leading-tight mb-6">
    Judul Utama
</h1>
<p class="text-lg leading-relaxed mb-8">
    Teks deskripsi hero
</p>

<!-- Section Konten -->
<h2 class="text-3xl font-semibold mb-6">Judul Section</h2>
<h3 class="text-xl font-medium mb-4">Subsection</h3>
<p class="text-base leading-normal mb-4">Konten body...</p>
```

---

### 5. KONTRAS & AKSESIBILITAS (WCAG)

**Aturan**: Pastikan kontras warna yang cukup untuk keterbacaan.

**Standar**:
- **Teks normal** (< 24px): Minimum rasio kontras **4.5:1**
- **Teks besar** (≥ 24px): Minimum rasio kontras **3:1**
- **Kepatuhan AA**: 4.5:1 (bagus)
- **Kepatuhan AAA**: 7:1 (sangat bagus)

**Dalam Praktik**:
```html
<!-- ✅ BENAR: Kontras tinggi -->
<p class="text-base-content bg-base-100">  <!-- Teks gelap di bg terang -->
<button class="btn btn-primary">           <!-- Teks putih di bg berwarna -->

<!-- ⚠️ PERIKSA: Kontras rendah mungkin gagal WCAG -->
<p class="text-neutral/50 bg-base-200">    <!-- Abu-abu terang di bg terang -->
```

**Konfigurasi Tema**:
Tema custom kita di `resources/css/daisyui.css` didesain dengan kepatuhan WCAG:
- Tema light: Teks gelap (25% lightness) di bg terang (98% lightness)
- Tema dark: Teks terang (90% lightness) di bg gelap (22% lightness)

---

### 6. WHITESPACE (RUANG NEGATIF)

**Aturan**: Lebih banyak whitespace = desain lebih premium dan profesional.

**Panduan Spacing**:
```html
<!-- Spacing section besar -->
<section class="py-20 mb-24">        <!-- 80-96px spacing vertikal -->
<section class="py-16 mb-20">        <!-- 64-80px untuk section lebih ketat -->

<!-- Spacing blok konten -->
<div class="mb-12">                   <!-- 48px antara blok utama -->
<div class="mb-8">                    <!-- 32px antara blok terkait -->

<!-- Spacing paragraf -->
<p class="mb-6">                      <!-- 24px antara paragraf -->
<p class="mb-4">                      <!-- 16px untuk spacing lebih ketat -->

<!-- Spacing baris -->
<p class="leading-relaxed">           <!-- 1.625 line height untuk kenyamanan -->
```

**Spacing Card/Container**:
```html
<!-- Padding yang generous untuk kesan premium -->
<div class="card p-8 lg:p-12">
    <h3 class="text-2xl mb-6">Judul</h3>
    <p class="mb-8">Konten...</p>
    <button class="btn">Aksi</button>
</div>
```

---

### 7. HIERARKI VISUAL

**Aturan**: Panduan perhatian pengguna menggunakan ukuran, warna, berat, dan posisi.

**Urutan Prioritas**:
1. **Ukuran** - Elemen lebih besar = lebih penting
2. **Warna** - Warna kontras/cerah = menarik perhatian
3. **Berat** - Bold = penekanan
4. **Posisi** - Kiri-atas = prioritas tertinggi (pola membaca F)

**Implementasi**:
```html
<!-- Aksi utama: Besar, berwarna, posisi menonjol -->
<button class="btn btn-accent btn-lg">Daftar Sekarang</button>

<!-- Aksi sekunder: Lebih kecil, kurang menonjol -->
<button class="btn btn-ghost">Pelajari Lebih Lanjut</button>

<!-- Hierarki visual di card -->
<div class="card">
    <h2 class="text-3xl font-bold text-primary mb-4">  <!-- Paling penting -->
        Judul Utama
    </h2>
    <p class="text-lg text-base-content/80 mb-6">      <!-- Pendukung -->
        Teks deskripsi
    </p>
    <button class="btn btn-accent">                     <!-- Call to action -->
        Ambil Aksi
    </button>
    <p class="text-sm text-base-content/60 mt-4">      <!-- Paling tidak penting -->
        Info tambahan
    </p>
</div>
```

**Layout F-Pattern**:
```html
<!-- Section hero dengan F-pattern -->
<section class="hero">
    <div class="hero-content text-left">              <!-- Rata kiri -->
        <div>
            <h1 class="text-6xl font-bold">Kiri Atas</h1>     <!-- Titik mata pertama -->
            <p class="text-xl mt-6">Pemindaian horizontal kedua</p>
            <button class="btn btn-accent mt-8">CTA</button>
        </div>
    </div>
</section>
```

---

### 8. KONSISTENSI & PENGULANGAN

**Aturan**: Gunakan pattern dan style yang sama di seluruh aplikasi.

**Yang Harus Konsisten**:

#### Tombol
```html
<!-- Definisikan style tombol sekali, gunakan ulang di mana-mana -->
<button class="btn btn-primary">Aksi Primary</button>
<button class="btn btn-secondary">Aksi Secondary</button>
<button class="btn btn-accent">Aksi Accent</button>
<button class="btn btn-ghost">Aksi Ghost</button>
```

#### Card
```html
<!-- Pattern card yang konsisten -->
<div class="card bg-base-100 shadow-xl p-8">
    <h3 class="text-2xl font-semibold mb-4">Judul Card</h3>
    <p class="text-base mb-6">Konten card...</p>
    <button class="btn btn-primary">Aksi</button>
</div>
```

#### Section
```html
<!-- Struktur section yang konsisten -->
<section class="py-20 px-6">
    <div class="container mx-auto max-w-6xl">
        <h2 class="text-4xl font-bold text-center mb-12">Judul Section</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Konten -->
        </div>
    </div>
</section>
```

#### Ikon
```html
<!-- Ukuran dan styling ikon yang konsisten -->
<svg class="w-6 h-6 text-primary">...</svg>     <!-- 24px untuk ikon standar -->
<svg class="w-8 h-8 text-accent">...</svg>      <!-- 32px untuk ikon lebih besar -->
```

**Pattern Library**: Buat komponen Blade/Livewire yang bisa digunakan ulang untuk pattern umum:
- `<x-button>` - Komponen tombol konsisten
- `<x-card>` - Komponen card konsisten
- `<x-section>` - Wrapper section konsisten
- `<x-heading>` - Komponen heading konsisten

---

## Implementasi Design System

### Menggunakan Tema DaisyUI

Proyek ini menggunakan tema DaisyUI custom yang didefinisikan di `resources/css/daisyui.css`:

**Tema Light**:
- Base: Off-white dengan hint biru (98% lightness)
- Content: Teks gelap (25% lightness) untuk kontras tinggi
- Primary: Hijau teal (60.54% lightness) - Warna brand
- Secondary: Ungu (65% lightness)
- Accent: Oranye (75% lightness)

**Tema Dark**:
- Base: Abu-abu gelap dengan hint biru (22% lightness)
- Content: Teks terang (90% lightness)
- Primary: Teal lebih cerah (65% lightness)
- Secondary: Ungu lebih cerah (70% lightness)
- Accent: Oranye lebih cerah (78% lightness)

**Kedua tema mempertahankan**:
- Nilai 8-point grid untuk radius, size, border
- Rasio kontras yang patuh WCAG
- Warna hue yang konsisten, disesuaikan untuk background

### Theme Toggle

```html
<!-- Theme toggle (sudah diatur di app.css) -->
<html data-theme="light">  <!-- atau data-theme="dark" -->
```

Custom variant `dark (&:where(.dark, .dark *))` memungkinkan styling dark mode.

---

## Standar Kualitas Kode

### Saat Menulis Komponen

1. **Ikuti 8-point grid**: Semua spacing harus kelipatan 8px (atau 4px untuk kontrol granular)
2. **Terapkan aturan warna 60-30-10**: Gunakan warna base untuk 60%, primary/secondary untuk 30%, accent untuk 10%
3. **Jaga konsistensi spacing**: Padding internal ≤ margin eksternal
4. **Gunakan skala tipografi**: Tetap pada ukuran dan berat teks yang sudah didefinisikan
5. **Pastikan aksesibilitas**: Periksa kontras warna memenuhi standar WCAG AA (minimum 4.5:1)
6. **Tambahkan whitespace yang generous**: Jangan takut dengan ruang kosong
7. **Buat hierarki yang jelas**: Ukuran, warna, berat, posisi sesuai urutan kepentingan
8. **Gunakan ulang pattern**: Gunakan style komponen yang sama di seluruh aplikasi

### Template Komponen

```html
<!-- Contoh: Komponen Feature Card -->
<div class="card bg-base-100 shadow-xl p-8 mb-8">                    <!-- 8-point grid: p-8 (32px), mb-8 (32px) -->
    <div class="flex items-center gap-4 mb-6">                       <!-- gap-4 (16px), mb-6 (24px) -->
        <svg class="w-12 h-12 text-primary">...</svg>                <!-- w-12, h-12 (48px) -->
        <h3 class="text-2xl font-semibold text-primary">             <!-- Skala tipografi -->
            Judul Fitur
        </h3>
    </div>
    <p class="text-base leading-relaxed text-base-content/80 mb-6">  <!-- Teks base dengan opacity -->
        Deskripsi fitur ada di sini dengan line height yang tepat untuk keterbacaan.
    </p>
    <button class="btn btn-accent">                                   <!-- 10% warna accent untuk CTA -->
        Pelajari Lebih Lanjut
    </button>
</div>
```

---

## Testing

Saat menulis test:
- Test komponen Livewire dengan `Livewire::test(ComponentName::class)`
- Gunakan syntax `it()` dan `expect()` dari Pest
- Test tema light dan dark jika styling bergantung pada tema

---

## Catatan Penting

- **Jangan pernah memodifikasi** nilai radius, size, border, depth, noise di `resources/css/daisyui.css` (baris 26-33 dan 61-68) tanpa izin eksplisit
- **Selalu periksa** bahwa desain kamu mematuhi semua 8 prinsip UI/UX sebelum commit
- **Gunakan komponen MaryUI** jika memungkinkan - mereka mengikuti praktik yang baik dan sudah siap pakai
- **Komponen Livewire** harus di `app/Livewire/` dengan view terkait di `resources/views/livewire/`

---

**Ingat**: Prinsip-prinsip ini bukan saran—mereka adalah persyaratan. Penerapan konsisten dari aturan-aturan ini akan menghasilkan aplikasi profil perusahaan yang profesional, accessible, dan kohesif secara visual.

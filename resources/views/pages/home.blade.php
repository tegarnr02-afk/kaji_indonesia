@extends('layouts.app')

@section('content')
    {{-- 1. HERO --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-primary-dark via-primary to-primary-light">
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23000\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        <div class="relative mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-20 lg:flex lg:items-center lg:gap-12 lg:px-8">
            <div class="max-w-2xl lg:max-w-xl">
                <h1 class="font-serif text-4xl font-bold tracking-tight text-white sm:text-5xl lg:text-6xl">
                    Membangun Indonesia Melalui Kajian & Pelatihan
                </h1>
                <p class="mt-4 text-lg text-white/90">
                    Kaji Indonesia hadir sebagai mitra terpercaya dalam pengembangan SDM, pendampingan UMKM, sertifikasi halal, dan konsultasi bisnis—dengan nilai-nilai profesional dan islami.
                </p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="#layanan" class="inline-flex items-center justify-center rounded-xl bg-secondary px-6 py-3.5 text-base font-semibold text-gray-900 shadow-lg transition-all hover:bg-secondary-dark hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-secondary focus:ring-offset-2">
                        Lihat Program
                    </a>
                    <a href="#kontak" class="inline-flex items-center justify-center rounded-xl border-2 border-white/80 bg-white/10 px-6 py-3.5 text-base font-semibold text-white backdrop-blur-sm transition-all hover:bg-white/20 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-primary">
                        Hubungi Kami
                    </a>
                </div>
            </div>
            <div class="mt-10 flex justify-center lg:mt-0 lg:shrink-0">
                <div class="relative rounded-2xl bg-white/10 p-6 backdrop-blur-sm ring-1 ring-white/20">
                    <div class="flex h-64 w-64 items-center justify-center rounded-xl bg-white/5 sm:h-80 sm:w-80">
                        <svg class="h-40 w-40 text-white/80 sm:h-52 sm:w-52" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 2. STATISTIK --}}
    <section class="bg-white py-16 sm:py-20" id="statistik"
             x-data="{
                 shown: false,
                 counters: { peserta: 0, umkm: 0, konsultan: 0, tahun: 0 },
                 target: { peserta: 5000, umkm: 1200, konsultan: 85, tahun: 10 },
                 step() {
                     if (!this.shown) return;
                     const speed = 80;
                     ['peserta','umkm','konsultan','tahun'].forEach(k => {
                         if (this.counters[k] < this.target[k]) {
                             const add = Math.ceil(this.target[k] / speed);
                             this.counters[k] = Math.min(this.counters[k] + add, this.target[k]);
                         }
                     });
                 }
             }"
             x-intersect.once="shown = true"
             x-effect="if (shown) { const id = setInterval(() => step(), 25); return () => clearInterval(id); }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-6 lg:grid-cols-4">
                <div class="rounded-2xl bg-gray-50 p-6 text-center shadow-lg ring-1 ring-gray-200/50">
                    <p class="font-serif text-4xl font-bold text-primary sm:text-5xl" x-text="counters.peserta.toLocaleString('id-ID')">0</p>
                    <p class="mt-1 text-sm font-medium text-gray-600">Peserta Pelatihan</p>
                </div>
                <div class="rounded-2xl bg-gray-50 p-6 text-center shadow-lg ring-1 ring-gray-200/50">
                    <p class="font-serif text-4xl font-bold text-primary sm:text-5xl" x-text="counters.umkm.toLocaleString('id-ID')">0</p>
                    <p class="mt-1 text-sm font-medium text-gray-600">UMKM Dampingan</p>
                </div>
                <div class="rounded-2xl bg-gray-50 p-6 text-center shadow-lg ring-1 ring-gray-200/50">
                    <p class="font-serif text-4xl font-bold text-primary sm:text-5xl" x-text="counters.konsultan">0</p>
                    <p class="mt-1 text-sm font-medium text-gray-600">Konsultan Aktif</p>
                </div>
                <div class="rounded-2xl bg-gray-50 p-6 text-center shadow-lg ring-1 ring-gray-200/50 col-span-2 lg:col-span-1">
                    <p class="font-serif text-4xl font-bold text-primary sm:text-5xl" x-text="counters.tahun">0</p>
                    <p class="mt-1 text-sm font-medium text-gray-600">Tahun Pengalaman</p>
                </div>
            </div>
        </div>
    </section>

    {{-- 3. LAYANAN UNGGULAN --}}
    <section class="bg-gray-50 py-16 sm:py-20" id="layanan">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="font-serif text-3xl font-bold text-gray-900 sm:text-4xl">Layanan Unggulan</h2>
                <p class="mx-auto mt-3 max-w-2xl text-gray-600">Berbagai program dan layanan untuk mendukung perkembangan bisnis dan SDM Anda.</p>
            </div>
            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @php
                    $layanan = [
                        ['route' => 'pelatihan', 'icon' => 'academic', 'title' => 'Pelatihan', 'desc' => 'Program pelatihan berkualitas untuk peningkatan kompetensi SDM dan profesional.'],
                        ['route' => 'umkm', 'icon' => 'store', 'title' => 'UMKM', 'desc' => 'Pendampingan dan penguatan kapasitas usaha mikro, kecil, dan menengah.'],
                        ['route' => 'halal-center', 'icon' => 'halal', 'title' => 'Halal Center', 'desc' => 'Sertifikasi dan konsultasi halal untuk produk dan proses bisnis Anda.'],
                        ['route' => 'konsultan', 'icon' => 'consult', 'title' => 'Konsultan', 'desc' => 'Konsultasi strategi bisnis, manajemen, dan pengembangan organisasi.'],
                        ['route' => 'media', 'icon' => 'media', 'title' => 'Media', 'desc' => 'Konten edukatif dan informasi seputar kajian, bisnis, dan halal.'],
                        ['title' => 'Kajian', 'icon' => 'book', 'desc' => 'Forum kajian dan diskusi untuk pengembangan wawasan dan jaringan.', 'route' => null],
                    ];
                @endphp
                @foreach ($layanan as $item)
                    <div class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-200/50 transition-shadow hover:shadow-xl">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary">
                            @if (($item['icon'] ?? '') === 'academic')
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg>
                            @elseif (($item['icon'] ?? '') === 'store')
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                            @elseif (($item['icon'] ?? '') === 'halal')
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            @elseif (($item['icon'] ?? '') === 'consult')
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            @elseif (($item['icon'] ?? '') === 'media')
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                            @else
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                            @endif
                        </div>
                        <h3 class="mt-4 font-serif text-xl font-semibold text-gray-900">{{ $item['title'] }}</h3>
                        <p class="mt-2 text-sm text-gray-600">{{ $item['desc'] }}</p>
                        @if (!empty($item['route']))
                            <a href="{{ route($item['route']) }}" class="mt-4 inline-flex items-center text-sm font-semibold text-primary hover:underline">
                                Selengkapnya
                                <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        @else
                            <a href="#kontak" class="mt-4 inline-flex items-center text-sm font-semibold text-primary hover:underline">
                                Selengkapnya
                                <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- 4. TENTANG KAMI --}}
    <section class="bg-white py-16 sm:py-20" id="tentang-kami">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
                <div class="relative overflow-hidden rounded-2xl bg-gray-100">
                    <div class="aspect-[4/3] flex items-center justify-center bg-gradient-to-br from-primary/20 to-primary-light/20">
                        <svg class="h-48 w-48 text-primary/40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <h2 class="font-serif text-3xl font-bold text-gray-900 sm:text-4xl">Tentang Kami</h2>
                    <p class="mt-4 text-gray-600">
                        Kaji Indonesia berkomitmen menjadi mitra terpercaya dalam pemberdayaan masyarakat dan dunia usaha melalui kajian yang mendalam, pelatihan berkualitas, serta pendampingan berkelanjutan—dengan integritas dan nilai-nilai islami.
                    </p>
                    <div class="mt-6 space-y-4">
                        <div>
                            <h3 class="font-semibold text-gray-900">Visi</h3>
                            <p class="mt-1 text-sm text-gray-600">Menjadi lembaga terdepan dalam pengembangan SDM dan UMKM yang berdaya saing dan berakhlak mulia.</p>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Misi</h3>
                            <ul class="mt-2 space-y-1 text-sm text-gray-600">
                                <li class="flex items-start gap-2"><span class="mt-0.5 inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-primary/20 text-primary"><svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span> Menyelenggarakan pelatihan dan kajian yang aplikatif dan terukur.</li>
                                <li class="flex items-start gap-2"><span class="mt-0.5 inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-primary/20 text-primary"><svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span> Mendampingi UMKM dan pelaku usaha menuju sertifikasi halal dan tata kelola yang baik.</li>
                                <li class="flex items-start gap-2"><span class="mt-0.5 inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-primary/20 text-primary"><svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span> Menyediakan layanan konsultasi yang profesional dan berorientasi hasil.</li>
                            </ul>
                        </div>
                    </div>
                    <ul class="mt-6 space-y-2">
                        <li class="flex items-center gap-2 text-sm text-gray-700"><span class="flex h-5 w-5 items-center justify-center rounded-full bg-secondary/20 text-secondary"><svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span> Berpengalaman dan tersertifikasi</li>
                        <li class="flex items-center gap-2 text-sm text-gray-700"><span class="flex h-5 w-5 items-center justify-center rounded-full bg-secondary/20 text-secondary"><svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span> Pendekatan islami dan profesional</li>
                        <li class="flex items-center gap-2 text-sm text-gray-700"><span class="flex h-5 w-5 items-center justify-center rounded-full bg-secondary/20 text-secondary"><svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></span> Jangkauan nasional</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- 5. TESTIMONI / PARTNER --}}
    <section class="bg-gray-50 py-16 sm:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="font-serif text-3xl font-bold text-gray-900 sm:text-4xl">Apa Kata Mereka</h2>
                <p class="mx-auto mt-3 max-w-2xl text-gray-600">Testimoni dari mitra dan peserta program Kaji Indonesia.</p>
            </div>
            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <div class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-200/50">
                    <p class="text-gray-700">"Pelatihan dari Kaji Indonesia sangat aplikatif. Tim kami langsung bisa mengimplementasikan di lapangan."</p>
                    <p class="mt-4 font-semibold text-gray-900">Bapak Ahmad, Direktur HR</p>
                    <p class="text-sm text-gray-500">Perusahaan Manufaktur</p>
                </div>
                <div class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-200/50">
                    <p class="text-gray-700">"Pendampingan UMKM dan proses sertifikasi halal kami berjalan lancar. Recommended."</p>
                    <p class="mt-4 font-semibold text-gray-900">Ibu Siti, Pemilik UMKM</p>
                    <p class="text-sm text-gray-500">Produk Makanan</p>
                </div>
                <div class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-200/50 sm:col-span-2 lg:col-span-1">
                    <p class="text-gray-700">"Konsultan profesional dan komunikatif. Hasil rekomendasi strategi sangat membantu perkembangan bisnis kami."</p>
                    <p class="mt-4 font-semibold text-gray-900">Bapak Rudi, CEO Startup</p>
                    <p class="text-sm text-gray-500">Teknologi</p>
                </div>
            </div>
            <div class="mt-12 border-t border-gray-200 pt-12">
                <p class="text-center text-sm font-medium uppercase tracking-wider text-gray-500">Dipercaya oleh</p>
                <div class="mt-6 flex flex-wrap items-center justify-center gap-8 grayscale opacity-70">
                    <div class="h-10 w-24 rounded-lg bg-gray-200 flex items-center justify-center text-xs text-gray-500">Partner 1</div>
                    <div class="h-10 w-24 rounded-lg bg-gray-200 flex items-center justify-center text-xs text-gray-500">Partner 2</div>
                    <div class="h-10 w-24 rounded-lg bg-gray-200 flex items-center justify-center text-xs text-gray-500">Partner 3</div>
                    <div class="h-10 w-24 rounded-lg bg-gray-200 flex items-center justify-center text-xs text-gray-500">Partner 4</div>
                </div>
            </div>
        </div>
    </section>

    {{-- 6. CTA BANNER --}}
    <section class="bg-primary py-16 sm:py-20" id="kontak">
        <div class="mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
            <h2 class="font-serif text-3xl font-bold text-white sm:text-4xl">Siap Berkembang Bersama Kami?</h2>
            <p class="mt-4 text-lg text-white/90">Daftar sekarang untuk program pelatihan, pendampingan UMKM, atau konsultasi. Tim kami siap mendampingi Anda.</p>
            <a href="{{ route('register') }}" class="mt-8 inline-flex items-center justify-center rounded-xl bg-secondary px-8 py-4 text-base font-semibold text-gray-900 shadow-lg transition-all hover:bg-secondary-dark hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-secondary focus:ring-offset-2 focus:ring-offset-primary">
                Daftar Sekarang
            </a>
        </div>
    </section>
@endsection

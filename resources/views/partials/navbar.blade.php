<header class="sticky top-0 z-50 w-full border-b border-gray-200/80 bg-white/80 backdrop-blur-md supports-[backdrop-filter]:bg-white/70"
        x-data="{ mobileOpen: false }">
    <nav class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-4 py-3 sm:px-6 lg:px-8" aria-label="Navigasi utama">
        {{-- Logo + Nama --}}
        <a href="{{ route('home') }}" class="flex shrink-0 items-center gap-2 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 rounded-xl">
            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-primary text-white" aria-hidden="true">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
            </span>
            <span class="font-serif text-xl font-bold text-primary">Kaji Indonesia</span>
        </a>

        {{-- Menu tengah (desktop) --}}
        <div class="hidden items-center gap-1 md:flex">
            @php
                $navItems = [
                    ['route' => 'home', 'label' => 'Beranda'],
                    ['route' => 'pelatihan', 'label' => 'Pelatihan'],
                    ['route' => 'umkm', 'label' => 'UMKM'],
                    ['route' => 'halal-center', 'label' => 'Halal Center'],
                    ['route' => 'konsultan', 'label' => 'Konsultan'],
                    ['route' => 'media', 'label' => 'Media'],
                ];
            @endphp
            @foreach ($navItems as $item)
                <a href="{{ route($item['route']) }}"
                   class="relative rounded-xl px-4 py-2.5 text-sm font-medium transition-colors duration-200
                          {{ Request::routeIs($item['route']) ? 'text-primary' : 'text-gray-700 hover:bg-primary/10 hover:text-primary' }}
                          {{ Request::routeIs($item['route']) ? 'bg-primary/10' : '' }}">
                    @if (Request::routeIs($item['route']))
                        <span class="absolute inset-x-2 bottom-1.5 h-0.5 rounded-full bg-primary"></span>
                    @endif
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>

        {{-- Kanan: Masuk + Daftar --}}
        <div class="hidden items-center gap-2 md:flex">
            <a href="{{ route('login') }}"
               class="rounded-xl border-2 border-primary px-4 py-2.5 text-sm font-semibold text-primary transition-all duration-200 hover:bg-primary/10 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
                Masuk
            </a>
            <a href="{{ route('register') }}"
               class="rounded-xl bg-primary px-4 py-2.5 text-sm font-semibold text-white shadow-md transition-all duration-200 hover:bg-primary-dark hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
                Daftar
            </a>
        </div>

        {{-- Mobile: hamburger --}}
        <button type="button"
                class="flex h-10 w-10 items-center justify-center rounded-xl text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-primary md:hidden"
                aria-label="Buka menu"
                aria-expanded="false"
                :aria-expanded="mobileOpen"
                @click="mobileOpen = !mobileOpen">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="!mobileOpen">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="mobileOpen" x-cloak style="display: none;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </nav>

    {{-- Mobile menu dropdown --}}
    <div class="border-t border-gray-200/80 bg-white/95 backdrop-blur-md md:hidden"
         x-show="mobileOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         x-cloak
         style="display: none;"
         @click.away="mobileOpen = false">
        <div class="mx-auto max-w-7xl space-y-0.5 px-4 py-3 pb-4">
            @foreach ($navItems as $item)
                <a href="{{ route($item['route']) }}"
                   class="block rounded-xl px-4 py-3 text-sm font-medium {{ Request::routeIs($item['route']) ? 'bg-primary/15 text-primary' : 'text-gray-700 hover:bg-gray-100' }}"
                   @click="mobileOpen = false">
                    {{ $item['label'] }}
                </a>
            @endforeach
            <div class="mt-3 flex flex-col gap-2 border-t border-gray-200 pt-3">
                <a href="{{ route('login') }}" class="rounded-xl border-2 border-primary px-4 py-3 text-center text-sm font-semibold text-primary" @click="mobileOpen = false">Masuk</a>
                <a href="{{ route('register') }}" class="rounded-xl bg-primary px-4 py-3 text-center text-sm font-semibold text-white" @click="mobileOpen = false">Daftar</a>
            </div>
        </div>
    </div>
</header>

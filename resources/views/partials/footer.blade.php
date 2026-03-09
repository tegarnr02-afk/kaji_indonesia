<footer class="border-t border-gray-200 bg-gray-50">
    <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
            {{-- Brand --}}
            <div class="lg:col-span-1">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-2">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-primary text-white">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </span>
                    <span class="font-serif text-xl font-bold text-primary">Kaji Indonesia</span>
                </a>
                <p class="mt-3 text-sm text-gray-600">
                    Membangun Indonesia melalui kajian, pelatihan, dan pendampingan UMKM serta layanan halal & konsultan.
                </p>
            </div>
            {{-- Links --}}
            <div>
                <h3 class="text-sm font-semibold uppercase tracking-wider text-gray-900">Layanan</h3>
                <ul class="mt-4 space-y-2">
                    <li><a href="{{ route('pelatihan') }}" class="text-sm text-gray-600 hover:text-primary">Pelatihan</a></li>
                    <li><a href="{{ route('umkm') }}" class="text-sm text-gray-600 hover:text-primary">UMKM</a></li>
                    <li><a href="{{ route('halal-center') }}" class="text-sm text-gray-600 hover:text-primary">Halal Center</a></li>
                    <li><a href="{{ route('konsultan') }}" class="text-sm text-gray-600 hover:text-primary">Konsultan</a></li>
                    <li><a href="{{ route('media') }}" class="text-sm text-gray-600 hover:text-primary">Media</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-sm font-semibold uppercase tracking-wider text-gray-900">Perusahaan</h3>
                <ul class="mt-4 space-y-2">
                    <li><a href="{{ route('home') }}#tentang-kami" class="text-sm text-gray-600 hover:text-primary">Tentang Kami</a></li>
                    <li><a href="{{ route('home') }}#layanan" class="text-sm text-gray-600 hover:text-primary">Layanan Unggulan</a></li>
                    <li><a href="{{ route('home') }}#kontak" class="text-sm text-gray-600 hover:text-primary">Kontak</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-sm font-semibold uppercase tracking-wider text-gray-900">Kontak</h3>
                <ul class="mt-4 space-y-2 text-sm text-gray-600">
                    <li>info@kajiindonesia.com</li>
                    <li>+62 812 3456 7890</li>
                    <li>Jakarta, Indonesia</li>
                </ul>
            </div>
        </div>
        <div class="mt-10 flex flex-col items-center justify-between gap-4 border-t border-gray-200 pt-8 sm:flex-row">
            <p class="text-sm text-gray-500">&copy; {{ date('Y') }} Kaji Indonesia. Hak cipta dilindungi.</p>
            <div class="flex gap-6 text-sm text-gray-500">
                <a href="#" class="hover:text-primary">Kebijakan Privasi</a>
                <a href="#" class="hover:text-primary">Syarat & Ketentuan</a>
            </div>
        </div>
    </div>
</footer>

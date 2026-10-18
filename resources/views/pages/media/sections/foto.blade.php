<section id="galeri-foto" class="section-space bg-canvas">
    <div class="container-site">
        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
            <div class="max-w-2xl">
                <span class="section-eyebrow">Galeri Dokumentasi</span>
                <h2 class="section-title mt-3">Cerita dan Aktivitas dalam Bingkai Foto</h2>
                <p class="section-description">Ruang dokumentasi visual untuk mengenal kegiatan, kepedulian terhadap santri, kehidupan pesantren, dan semangat kolaborasi melalui foto yang bermakna.</p>
            </div>
            <a href="{{ route('informasi') }}" class="btn btn-outline inline-flex items-center justify-center gap-2">
                Jelajahi Informasi
                <x-heroicon-o-arrow-up-right class="h-5 w-5" />
            </a>
        </div>
        <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-12 lg:gap-5">
            <div class="group relative flex min-h-72 flex-col justify-between overflow-hidden rounded-3xl border border-line bg-[#063b35] p-6 sm:min-h-80 lg:col-span-7 lg:row-span-2 lg:min-h-[34rem] lg:p-8">
                <div class="absolute -right-16 -top-16 h-64 w-64 rounded-full border border-white/10 transition duration-500 group-hover:scale-110"></div>
                <div class="absolute -right-4 top-12 h-44 w-44 rounded-full border border-white/10"></div>
                <div class="absolute bottom-16 right-12 h-28 w-28 rounded-full bg-[#287f73]/30 blur-2xl"></div>
                <div class="relative flex items-start justify-between gap-4">
                    <span class="rounded-full border border-white/20 bg-white/10 px-3 py-1.5 text-xs font-semibold tracking-wide text-white">Dokumentasi Kegiatan</span>
                    <div class="flex h-12 w-12 items-center justify-center rounded-2xl border border-white/15 bg-white/10 text-white">
                        <x-heroicon-o-camera class="h-6 w-6" />
                    </div>
                </div>
                <div class="relative mt-12 max-w-lg">
                    <div class="mb-4 flex h-16 w-16 items-center justify-center rounded-2xl bg-white/10 text-[#d9ece8]">
                        <x-heroicon-o-photo class="h-8 w-8" />
                    </div>
                    <h3 class="text-2xl font-bold !text-white sm:text-3xl">Momen yang Merekam Kepedulian</h3>
                    <p class="mt-3 max-w-md leading-7 text-[#d9ece8]">Dokumentasi kegiatan dapat ditampilkan di ruang ini sebagai arsip visual perjalanan, pembelajaran, dan kolaborasi.</p>
                    <a href="{{ route('kontak') }}" class="mt-6 inline-flex items-center gap-2 font-semibold text-white transition hover:gap-3">
                        Informasi dokumentasi
                        <x-heroicon-o-arrow-right class="h-5 w-5" />
                    </a>
                </div>
            </div>
            <div class="group relative flex min-h-64 flex-col justify-between overflow-hidden rounded-3xl border border-line bg-surface p-6 transition hover:border-brand-200 sm:min-h-72 lg:col-span-5 lg:p-7">
                <div class="absolute -right-8 -top-8 h-36 w-36 rounded-full bg-brand-50 transition duration-500 group-hover:scale-110"></div>
                <div class="relative flex items-start justify-between gap-4">
                    <span class="rounded-full bg-brand-50 px-3 py-1.5 text-xs font-semibold text-brand-800">Santri dan Pesantren</span>
                    <x-heroicon-o-academic-cap class="h-7 w-7 text-brand-700" />
                </div>
                <div class="relative mt-8">
                    <h3 class="text-xl font-bold text-ink">Kehidupan dan Pembelajaran</h3>
                    <p class="mt-2 text-sm leading-7 text-muted">Ruang untuk dokumentasi suasana belajar, aktivitas santri, dan lingkungan pesantren.</p>
                </div>
            </div>
            <div class="group relative flex min-h-64 flex-col justify-between overflow-hidden rounded-3xl border border-line bg-surface p-6 transition hover:border-brand-200 sm:min-h-72 lg:col-span-5 lg:p-7">
                <div class="absolute -right-8 -top-8 h-36 w-36 rounded-full bg-accent-light transition duration-500 group-hover:scale-110"></div>
                <div class="relative flex items-start justify-between gap-4">
                    <span class="rounded-full bg-accent-light px-3 py-1.5 text-xs font-semibold text-[#80601c]">Kolaborasi</span>
                    <x-heroicon-o-user-group class="h-7 w-7 text-[#a47b24]" />
                </div>
                <div class="relative mt-8">
                    <h3 class="text-xl font-bold text-ink">Pertemuan dan Sinergi</h3>
                    <p class="mt-2 text-sm leading-7 text-muted">Ruang dokumentasi untuk pertemuan, pertukaran gagasan, dan kerja sama berbagai pihak.</p>
                </div>
            </div>
        </div>
        <div class="mt-10">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <h3 class="text-xl font-bold text-ink">Koleksi Foto</h3>
                    <p class="mt-2 text-sm leading-7 text-muted">Foto akan ditampilkan setelah dokumentasi tersedia dan dipilih untuk dipublikasikan.</p>
                </div>
                <span class="inline-flex w-fit items-center gap-2 rounded-full border border-line bg-surface px-3 py-1.5 text-xs font-semibold text-muted">
                    <x-heroicon-o-photo class="h-4 w-4" />
                    Galeri dokumentasi
                </span>
            </div>
            <div class="mt-5 rounded-3xl border border-dashed border-line bg-surface px-6 py-12 text-center sm:px-10 sm:py-16">
                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-brand-50 text-brand-700">
                    <x-heroicon-o-photo class="h-8 w-8" />
                </div>
                <h3 class="mt-5 text-xl font-bold text-ink">Belum ada foto untuk ditampilkan</h3>
                <p class="mx-auto mt-3 max-w-xl leading-7 text-muted">Koleksi foto dapat ditambahkan secara bertahap agar setiap dokumentasi memiliki konteks, keterangan, dan izin publikasi yang sesuai.</p>
                <a href="{{ route('kontak') }}" class="btn btn-primary mt-6 inline-flex items-center justify-center gap-2">
                    Hubungi AISNU Jawa Barat
                    <x-heroicon-o-arrow-right class="h-5 w-5" />
                </a>
            </div>
        </div>
    </div>
</section>
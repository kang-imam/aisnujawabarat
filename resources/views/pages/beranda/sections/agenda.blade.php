<section id="agenda" aria-labelledby="agenda-title" class="section-space bg-surface text-ink">
    <div class="container-site">
        <div class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between">
            <div class="section-heading mb-0">
                <span class="section-eyebrow">Agenda dan Kegiatan</span>
                <h2 id="agenda-title" class="section-title">Bergerak Bersama untuk Pesantren yang Lebih Aman.</h2>
                <p class="section-description">Ikuti kegiatan, edukasi, dan ruang kolaborasi AISNU Jawa Barat dalam memperkuat perlindungan santri serta membangun lingkungan pesantren yang aman dan bermartabat.</p>
            </div>
            <a href="{{ route('berita.index') }}" class="btn btn-outline w-full shrink-0 sm:w-auto">
                Lihat Berita
                <x-heroicon-o-arrow-up-right class="size-4" aria-hidden="true" />
            </a>
        </div>
        <div class="mt-10 grid gap-5 lg:grid-cols-12 lg:gap-6">
            <article class="card card-interactive group flex flex-col lg:col-span-7">
                <div class="relative isolate flex min-h-56 flex-1 flex-col justify-between overflow-hidden bg-brand-800 p-6 text-white sm:min-h-64 sm:p-8 dark:bg-[#203b35]">
                    <div class="pointer-events-none absolute -right-12 -top-16 size-64 rounded-full border border-white/10" aria-hidden="true"></div>
                    <div class="pointer-events-none absolute -right-2 -top-6 size-44 rounded-full border border-white/10" aria-hidden="true"></div>
                    <div class="pointer-events-none absolute bottom-0 right-0 h-1 w-28 bg-accent" aria-hidden="true"></div>
                    <div class="relative flex items-center justify-between gap-4">
                        <span class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-3 py-1.5 text-xs font-bold tracking-wide text-white">
                            <span class="size-1.5 rounded-full bg-accent" aria-hidden="true"></span>
                            Fokus Kegiatan
                        </span>
                        <x-heroicon-o-calendar-days class="size-8 text-white/75" aria-hidden="true" />
                    </div>
                    <div class="relative mt-10 max-w-xl">
                        <p class="text-xs font-bold uppercase tracking-[0.16em] text-white/70">Edukasi dan Pencegahan</p>
                        <h3 class="mt-3 text-2xl font-bold leading-tight text-white sm:text-3xl">Menguatkan Budaya Perlindungan Santri</h3>
                        <p class="mt-3 max-w-lg text-sm leading-7 text-white/80">Mendorong pemahaman tentang hak santri, pencegahan kekerasan, dan pentingnya lingkungan pendidikan yang aman.</p>
                    </div>
                </div>
                <div class="flex flex-col gap-4 p-6 sm:flex-row sm:items-center sm:justify-between sm:p-8">
                    <div class="flex items-start gap-3">
                        <span class="flex size-10 shrink-0 items-center justify-center rounded-control bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                            <x-heroicon-o-academic-cap class="size-5" aria-hidden="true" />
                        </span>
                        <div>
                            <p class="font-bold text-brand-800 dark:text-brand-900">Literasi dan penguatan kapasitas</p>
                            <p class="mt-1 text-sm leading-6 text-muted">Membangun pengetahuan bersama untuk langkah perlindungan yang lebih baik.</p>
                        </div>
                    </div>
                    <a href="{{ route('informasi') }}" class="inline-flex shrink-0 items-center gap-2 text-sm font-bold text-brand-700 transition-colors hover:text-brand-500 dark:text-brand-500 dark:hover:text-brand-400">
                        Pelajari lebih lanjut
                        <x-heroicon-o-arrow-right class="size-4 transition-transform group-hover:translate-x-1" aria-hidden="true" />
                    </a>
                </div>
            </article>
            <div class="grid gap-5 sm:grid-cols-2 lg:col-span-5 lg:grid-cols-1">
                <article class="card card-interactive group flex flex-col p-6 sm:p-7">
                    <div class="flex items-start justify-between gap-4">
                        <span class="flex size-12 shrink-0 items-center justify-center rounded-control bg-accent-light text-warning">
                            <x-heroicon-o-chat-bubble-left-right class="size-6" aria-hidden="true" />
                        </span>
                        <span class="rounded-full border border-line px-3 py-1 text-xs font-semibold text-muted">Dialog dan Advokasi</span>
                    </div>
                    <h3 class="mt-5 text-xl font-bold text-brand-800 dark:text-brand-900">Membuka Ruang Aspirasi</h3>
                    <p class="mt-2 text-sm leading-7 text-muted">Membangun komunikasi yang peduli dan bertanggung jawab untuk memahami kebutuhan serta aspirasi santri.</p>
                    <a href="{{ route('layanan') }}" class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-brand-700 transition-colors hover:text-brand-500 dark:text-brand-500 dark:hover:text-brand-400">
                        Kenali layanan
                        <x-heroicon-o-arrow-right class="size-4 transition-transform group-hover:translate-x-1" aria-hidden="true" />
                    </a>
                </article>
                <article class="card card-interactive group flex flex-col p-6 sm:p-7">
                    <div class="flex items-start justify-between gap-4">
                        <span class="flex size-12 shrink-0 items-center justify-center rounded-control bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                            <x-heroicon-o-user-group class="size-6" aria-hidden="true" />
                        </span>
                        <span class="rounded-full border border-line px-3 py-1 text-xs font-semibold text-muted">Kemitraan</span>
                    </div>
                    <h3 class="mt-5 text-xl font-bold text-brand-800 dark:text-brand-900">Memperluas Kolaborasi</h3>
                    <p class="mt-2 text-sm leading-7 text-muted">Menghubungkan berbagai pihak untuk memperkuat kepedulian, edukasi, dan upaya perlindungan di lingkungan pesantren.</p>
                    <a href="{{ route('kemitraan') }}" class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-brand-700 transition-colors hover:text-brand-500 dark:text-brand-500 dark:hover:text-brand-400">
                        Jelajahi kemitraan
                        <x-heroicon-o-arrow-right class="size-4 transition-transform group-hover:translate-x-1" aria-hidden="true" />
                    </a>
                </article>
            </div>
        </div>
        <div class="mt-8 flex flex-col gap-4 rounded-card border border-line bg-canvas p-5 sm:flex-row sm:items-center sm:justify-between sm:p-6">
            <div class="flex items-start gap-3">
                <span class="flex size-10 shrink-0 items-center justify-center rounded-full bg-accent-light text-warning">
                    <x-heroicon-o-sparkles class="size-5" aria-hidden="true" />
                </span>
                <div>
                    <h3 class="text-base font-bold text-brand-800 dark:text-brand-900">Setiap langkah berarti bagi perlindungan santri.</h3>
                    <p class="mt-1 text-sm leading-6 text-muted">Temukan informasi, program, dan kegiatan yang dapat menjadi awal kontribusi bersama.</p>
                </div>
            </div>
            <a href="{{ route('program') }}" class="btn btn-primary w-full shrink-0 sm:w-auto">
                Lihat Program
                <x-heroicon-o-arrow-right class="size-4" aria-hidden="true" />
            </a>
        </div>
    </div>
</section>
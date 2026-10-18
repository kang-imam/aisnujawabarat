<section id="saluran-kontak" class="section-space bg-canvas">
    <div class="container-site">
        <div class="section-heading">
            <span class="section-eyebrow">Hubungi Kami</span>
            <h2 class="section-title">Temukan Saluran Komunikasi yang Tepat.</h2>
            <p class="section-description">Kami membuka ruang komunikasi untuk pertanyaan seputar organisasi, informasi program, peluang kemitraan, dan hal lain yang berkaitan dengan perlindungan santri serta kehidupan pesantren.</p>
        </div>
        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            <article class="card card-interactive group flex h-full flex-col p-6 sm:p-7">
                <div class="flex items-start justify-between gap-4">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl border border-brand-200 bg-brand-50 text-brand-700 transition group-hover:bg-brand-600 group-hover:text-white dark:border-brand-200">
                        <x-heroicon-o-chat-bubble-left-right class="h-7 w-7" />
                    </div>
                    <span class="rounded-full border border-line bg-canvas px-3 py-1 text-xs font-semibold text-muted">Komunikasi</span>
                </div>
                <h3 class="mt-6 text-xl font-bold text-ink">Pertanyaan Umum</h3>
                <p class="mt-3 flex-1 text-sm leading-7 text-muted">Untuk menyampaikan pertanyaan tentang AISNU Jawa Barat, mengenal organisasi, atau mencari informasi awal yang sesuai dengan kebutuhan Anda.</p>
                <div class="mt-6 border-t border-line pt-5">
                    <a href="{{ route('informasi') }}" class="inline-flex items-center gap-2 text-sm font-bold text-brand-700 transition hover:text-brand-500 dark:text-brand-600">
                        Jelajahi informasi
                        <x-heroicon-o-arrow-right class="h-4 w-4 transition group-hover:translate-x-1" />
                    </a>
                </div>
            </article>
            <article class="card card-interactive group flex h-full flex-col p-6 sm:p-7">
                <div class="flex items-start justify-between gap-4">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl border border-[#cc9933]/30 bg-accent-light text-[#966515] transition group-hover:bg-accent group-hover:text-[#1a1a1a] dark:text-[#e0b34e]">
                        <x-heroicon-o-user-group class="h-7 w-7" />
                    </div>
                    <span class="rounded-full border border-line bg-canvas px-3 py-1 text-xs font-semibold text-muted">Kolaborasi</span>
                </div>
                <h3 class="mt-6 text-xl font-bold text-ink">Kemitraan dan Kerja Sama</h3>
                <p class="mt-3 flex-1 text-sm leading-7 text-muted">Untuk lembaga, komunitas, maupun pihak yang ingin menjajaki pertukaran gagasan, kegiatan edukasi, atau peluang kolaborasi yang relevan.</p>
                <div class="mt-6 border-t border-line pt-5">
                    <a href="{{ route('kemitraan') }}" class="inline-flex items-center gap-2 text-sm font-bold text-brand-700 transition hover:text-brand-500 dark:text-brand-600">
                        Pelajari kemitraan
                        <x-heroicon-o-arrow-right class="h-4 w-4 transition group-hover:translate-x-1" />
                    </a>
                </div>
            </article>
            <article class="card card-interactive group flex h-full flex-col p-6 sm:p-7 sm:col-span-2 lg:col-span-1">
                <div class="flex items-start justify-between gap-4">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl border border-brand-200 bg-brand-50 text-brand-700 transition group-hover:bg-brand-600 group-hover:text-white dark:border-brand-200">
                        <x-heroicon-o-shield-check class="h-7 w-7" />
                    </div>
                    <span class="rounded-full border border-line bg-canvas px-3 py-1 text-xs font-semibold text-muted">Perlindungan</span>
                </div>
                <h3 class="mt-6 text-xl font-bold text-ink">Informasi Layanan</h3>
                <p class="mt-3 flex-1 text-sm leading-7 text-muted">Untuk memahami informasi layanan, panduan awal, serta hal-hal yang perlu diperhatikan ketika mencari bantuan atau informasi terkait perlindungan santri.</p>
                <div class="mt-6 border-t border-line pt-5">
                    <a href="{{ route('layanan') }}" class="inline-flex items-center gap-2 text-sm font-bold text-brand-700 transition hover:text-brand-500 dark:text-brand-600">
                        Lihat informasi layanan
                        <x-heroicon-o-arrow-right class="h-4 w-4 transition group-hover:translate-x-1" />
                    </a>
                </div>
            </article>
        </div>
        <div class="mt-8 overflow-hidden rounded-2xl border border-line bg-surface p-6 sm:p-8">
            <div class="flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex items-start gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-800">
                        <x-heroicon-o-information-circle class="h-6 w-6" />
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-ink">Belum menemukan informasi yang dicari?</h3>
                        <p class="mt-2 text-sm leading-7 text-muted">Telusuri halaman informasi atau gunakan pencarian situs untuk menemukan topik yang sesuai.</p>
                    </div>
                </div>
                <div class="flex shrink-0 flex-col gap-3 sm:flex-row">
                    <a href="{{ route('pencarian') }}" class="btn btn-primary">
                        <x-heroicon-o-magnifying-glass class="h-4 w-4" />
                        Cari Informasi
                    </a>
                    <a href="{{ route('informasi') }}" class="btn btn-outline">
                        Pusat Informasi
                        <x-heroicon-o-arrow-up-right class="h-4 w-4" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
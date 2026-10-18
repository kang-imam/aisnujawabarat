<section id="alur-layanan" class="section-space bg-canvas">
    <div class="container-site">
        <div class="grid gap-10 lg:grid-cols-[0.8fr_1.2fr] lg:items-start lg:gap-16">
            <div class="lg:sticky lg:top-28">
                <span class="section-eyebrow">Panduan Awal</span>
                <h2 class="section-title mt-3">Langkah Awal untuk Menemukan Informasi yang Tepat</h2>
                <p class="section-description mt-4">Setiap kebutuhan memiliki konteks yang berbeda. Mulailah dengan mengenali persoalan, mencari informasi yang relevan, lalu menghubungi saluran komunikasi yang tersedia jika memerlukan penjelasan lebih lanjut.</p>
                <div class="mt-7 rounded-2xl border border-line bg-surface p-5 sm:p-6">
                    <div class="flex items-start gap-4">
                        <span class="flex size-11 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-800">
                            <x-heroicon-o-shield-check class="size-6" />
                        </span>
                        <div>
                            <h3 class="font-semibold text-ink">Utamakan keselamatan dan privasi</h3>
                            <p class="mt-2 text-sm leading-6 text-muted">Bagikan informasi seperlunya dan hindari menyebarkan identitas, dokumen pribadi, atau rincian sensitif melalui kanal publik.</p>
                        </div>
                    </div>
                </div>
                <a href="{{ route('kontak') }}" class="btn btn-primary mt-6 inline-flex items-center gap-2">
                    Lihat Informasi Kontak
                    <x-heroicon-o-arrow-right class="size-4" />
                </a>
            </div>
            <div class="relative">
                <div class="absolute bottom-10 left-6 top-10 w-px bg-line sm:left-8"></div>
                <div class="space-y-5 sm:space-y-6">
                    <article class="relative flex gap-5 rounded-2xl border border-line bg-surface p-5 transition duration-300 hover:border-brand-200 sm:gap-6 sm:p-7">
                        <div class="relative z-10 flex size-12 shrink-0 items-center justify-center rounded-2xl bg-brand-900 text-white shadow-sm sm:size-16">
                            <x-heroicon-o-magnifying-glass class="size-6 sm:size-7" />
                        </div>
                        <div class="min-w-0 flex-1 pt-1">
                            <span class="text-xs font-bold uppercase tracking-[0.16em] text-brand-700">Langkah 01</span>
                            <h3 class="mt-2 text-lg font-bold text-ink sm:text-xl">Kenali Kebutuhan Anda</h3>
                            <p class="mt-3 text-sm leading-7 text-muted">Tentukan informasi yang dibutuhkan, misalnya terkait perlindungan santri, kehidupan pesantren, edukasi, pengembangan potensi, atau kemitraan.</p>
                        </div>
                    </article>
                    <article class="relative flex gap-5 rounded-2xl border border-line bg-surface p-5 transition duration-300 hover:border-brand-200 sm:gap-6 sm:p-7">
                        <div class="relative z-10 flex size-12 shrink-0 items-center justify-center rounded-2xl bg-brand-900 text-white shadow-sm sm:size-16">
                            <x-heroicon-o-book-open class="size-6 sm:size-7" />
                        </div>
                        <div class="min-w-0 flex-1 pt-1">
                            <span class="text-xs font-bold uppercase tracking-[0.16em] text-brand-700">Langkah 02</span>
                            <h3 class="mt-2 text-lg font-bold text-ink sm:text-xl">Telusuri Informasi yang Relevan</h3>
                            <p class="mt-3 text-sm leading-7 text-muted">Gunakan halaman layanan, informasi, publikasi, dan program untuk memahami topik yang sesuai dengan kebutuhan Anda.</p>
                            <a href="{{ route('informasi') }}" class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-brand-800 hover:gap-3">
                                Buka pusat informasi
                                <x-heroicon-o-arrow-right class="size-4" />
                            </a>
                        </div>
                    </article>
                    <article class="relative flex gap-5 rounded-2xl border border-line bg-surface p-5 transition duration-300 hover:border-brand-200 sm:gap-6 sm:p-7">
                        <div class="relative z-10 flex size-12 shrink-0 items-center justify-center rounded-2xl bg-brand-900 text-white shadow-sm sm:size-16">
                            <x-heroicon-o-chat-bubble-left-right class="size-6 sm:size-7" />
                        </div>
                        <div class="min-w-0 flex-1 pt-1">
                            <span class="text-xs font-bold uppercase tracking-[0.16em] text-brand-700">Langkah 03</span>
                            <h3 class="mt-2 text-lg font-bold text-ink sm:text-xl">Sampaikan Pertanyaan dengan Jelas</h3>
                            <p class="mt-3 text-sm leading-7 text-muted">Jika membutuhkan penjelasan lebih lanjut, jelaskan maksud komunikasi dan konteks yang relevan melalui saluran kontak yang tersedia.</p>
                            <a href="{{ route('kontak') }}" class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-brand-800 hover:gap-3">
                                Lihat saluran komunikasi
                                <x-heroicon-o-arrow-right class="size-4" />
                            </a>
                        </div>
                    </article>
                    <article class="relative flex gap-5 rounded-2xl border border-line bg-surface p-5 transition duration-300 hover:border-brand-200 sm:gap-6 sm:p-7">
                        <div class="relative z-10 flex size-12 shrink-0 items-center justify-center rounded-2xl bg-brand-900 text-white shadow-sm sm:size-16">
                            <x-heroicon-o-clipboard-document-check class="size-6 sm:size-7" />
                        </div>
                        <div class="min-w-0 flex-1 pt-1">
                            <span class="text-xs font-bold uppercase tracking-[0.16em] text-brand-700">Langkah 04</span>
                            <h3 class="mt-2 text-lg font-bold text-ink sm:text-xl">Tinjau Informasi dan Langkah Berikutnya</h3>
                            <p class="mt-3 text-sm leading-7 text-muted">Catat informasi yang diperoleh dan pastikan langkah selanjutnya sesuai kebutuhan. Jika persoalan menyangkut keselamatan, cari bantuan dari pihak berwenang atau layanan darurat yang relevan.</p>
                        </div>
                    </article>
                </div>
                <div class="mt-6 rounded-2xl border border-amber-200/70 bg-amber-50 p-5 dark:border-amber-900/50 dark:bg-amber-950/20 sm:p-6">
                    <div class="flex items-start gap-3">
                        <x-heroicon-o-information-circle class="mt-0.5 size-6 shrink-0 text-amber-700 dark:text-amber-400" />
                        <div>
                            <h3 class="font-semibold text-amber-950 dark:text-amber-200">Penting untuk diperhatikan</h3>
                            <p class="mt-2 text-sm leading-6 text-amber-900 dark:text-amber-100/80">Panduan ini merupakan arahan umum untuk mencari informasi, bukan pengganti prosedur pengaduan resmi, layanan profesional, atau penanganan keadaan darurat. Ketersediaan tindak lanjut bergantung pada saluran dan layanan yang benar-benar tersedia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
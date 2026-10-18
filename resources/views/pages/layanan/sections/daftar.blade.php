<section id="daftar-layanan" class="section-space">
    <div class="container-site">
        <div class="mx-auto max-w-3xl text-center">
            <span class="section-eyebrow">Ruang Layanan</span>
            <h2 class="section-title mt-3">Temukan Informasi dan Dukungan yang Anda Butuhkan</h2>
            <p class="section-description mx-auto mt-4">Jelajahi ruang informasi yang berkaitan dengan perlindungan santri, kehidupan pesantren, pengembangan kapasitas, dan kolaborasi. Pilih topik yang paling sesuai dengan kebutuhan Anda untuk menemukan informasi lebih lanjut.</p>
        </div>
        <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            <article class="card card-interactive group flex h-full flex-col p-6 sm:p-7">
                <div class="flex size-14 items-center justify-center rounded-2xl bg-brand-50 text-brand-800 transition duration-300 group-hover:bg-brand-100">
                    <x-heroicon-o-shield-check class="size-7" />
                </div>
                <h3 class="mt-5 text-xl font-bold text-ink">Informasi Perlindungan Santri</h3>
                <p class="mt-3 flex-1 text-sm leading-7 text-muted">Kenali pentingnya keselamatan, penghormatan terhadap hak santri, pencegahan kekerasan, dan lingkungan pesantren yang aman.</p>
                <a href="{{ route('pesantren') }}" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-brand-800 transition hover:gap-3">
                    Jelajahi informasi
                    <x-heroicon-o-arrow-right class="size-4" />
                </a>
            </article>
            <article class="card card-interactive group flex h-full flex-col p-6 sm:p-7">
                <div class="flex size-14 items-center justify-center rounded-2xl bg-brand-50 text-brand-800 transition duration-300 group-hover:bg-brand-100">
                    <x-heroicon-o-chat-bubble-left-right class="size-7" />
                </div>
                <h3 class="mt-5 text-xl font-bold text-ink">Informasi dan Konsultasi Awal</h3>
                <p class="mt-3 flex-1 text-sm leading-7 text-muted">Temukan informasi awal untuk memahami kebutuhan, mengenali topik yang relevan, dan menentukan langkah komunikasi berikutnya.</p>
                <a href="{{ route('kontak') }}" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-brand-800 transition hover:gap-3">
                    Lihat kontak
                    <x-heroicon-o-arrow-right class="size-4" />
                </a>
            </article>
            <article class="card card-interactive group flex h-full flex-col p-6 sm:p-7">
                <div class="flex size-14 items-center justify-center rounded-2xl bg-brand-50 text-brand-800 transition duration-300 group-hover:bg-brand-100">
                    <x-heroicon-o-document-text class="size-7" />
                </div>
                <h3 class="mt-5 text-xl font-bold text-ink">Informasi Pengaduan</h3>
                <p class="mt-3 flex-1 text-sm leading-7 text-muted">Pelajari hal-hal yang perlu diperhatikan saat mencari bantuan, menyampaikan persoalan, dan menjaga kerahasiaan informasi pribadi.</p>
                <a href="{{ route('informasi') }}" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-brand-800 transition hover:gap-3">
                    Baca panduan informasi
                    <x-heroicon-o-arrow-right class="size-4" />
                </a>
            </article>
            <article class="card card-interactive group flex h-full flex-col p-6 sm:p-7">
                <div class="flex size-14 items-center justify-center rounded-2xl bg-brand-50 text-brand-800 transition duration-300 group-hover:bg-brand-100">
                    <x-heroicon-o-book-open class="size-7" />
                </div>
                <h3 class="mt-5 text-xl font-bold text-ink">Edukasi dan Literasi</h3>
                <p class="mt-3 flex-1 text-sm leading-7 text-muted">Akses informasi untuk memperluas wawasan mengenai kehidupan pesantren, kepedulian sosial, dan penguatan pengetahuan santri.</p>
                <a href="{{ route('publikasi.index') }}" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-brand-800 transition hover:gap-3">
                    Jelajahi publikasi
                    <x-heroicon-o-arrow-right class="size-4" />
                </a>
            </article>
            <article class="card card-interactive group flex h-full flex-col p-6 sm:p-7">
                <div class="flex size-14 items-center justify-center rounded-2xl bg-brand-50 text-brand-800 transition duration-300 group-hover:bg-brand-100">
                    <x-heroicon-o-academic-cap class="size-7" />
                </div>
                <h3 class="mt-5 text-xl font-bold text-ink">Pengembangan Potensi Santri</h3>
                <p class="mt-3 flex-1 text-sm leading-7 text-muted">Temukan referensi mengenai keterampilan, kreativitas, kewirausahaan, dan upaya membangun kemandirian santri.</p>
                <a href="{{ route('santripreneur') }}" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-brand-800 transition hover:gap-3">
                    Kenali pengembangan potensi
                    <x-heroicon-o-arrow-right class="size-4" />
                </a>
            </article>
            <article class="card card-interactive group flex h-full flex-col p-6 sm:p-7">
                <div class="flex size-14 items-center justify-center rounded-2xl bg-brand-50 text-brand-800 transition duration-300 group-hover:bg-brand-100">
                    <x-heroicon-o-user-group class="size-7" />
                </div>
                <h3 class="mt-5 text-xl font-bold text-ink">Kemitraan dan Kolaborasi</h3>
                <p class="mt-3 flex-1 text-sm leading-7 text-muted">Jelajahi peluang untuk berbagi gagasan, membangun jejaring, dan menjajaki kerja sama yang mendukung kehidupan pesantren.</p>
                <a href="{{ route('kemitraan') }}" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-brand-800 transition hover:gap-3">
                    Jelajahi kemitraan
                    <x-heroicon-o-arrow-right class="size-4" />
                </a>
            </article>
        </div>
        <div class="mt-10 rounded-2xl border border-line bg-canvas p-6 sm:flex sm:items-center sm:justify-between sm:gap-6 sm:p-8">
            <div class="flex items-start gap-4">
                <span class="flex size-11 shrink-0 items-center justify-center rounded-xl bg-surface text-brand-800">
                    <x-heroicon-o-information-circle class="size-6" />
                </span>
                <div>
                    <h3 class="font-bold text-ink">Belum menemukan informasi yang sesuai?</h3>
                    <p class="mt-2 text-sm leading-6 text-muted">Hubungi kami untuk menyampaikan pertanyaan atau menjelaskan kebutuhan informasi Anda melalui saluran komunikasi yang tersedia.</p>
                </div>
            </div>
            <a href="{{ route('kontak') }}" class="btn btn-primary mt-5 inline-flex shrink-0 items-center justify-center gap-2 sm:mt-0">
                Hubungi Kami
                <x-heroicon-o-arrow-up-right class="size-4" />
            </a>
        </div>
    </div>
</section>
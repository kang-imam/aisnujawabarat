<section class="section-space">
    <div class="container-site">
        <div class="max-w-3xl">
            <p class="section-eyebrow">Jelajahi topik</p>

            <h2 class="section-title">
                Informasi yang relevan dengan kehidupan santri
            </h2>

            <p class="section-description">
                Pilih topik yang ingin kamu pelajari. Informasi yang berkaitan
                dengan perlindungan perlu dibaca dengan mengutamakan keselamatan,
                privasi, dan penghormatan kepada pihak yang terdampak.
            </p>
        </div>

        <div class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            {{-- Dunia pesantren --}}
            <a
                href="{{ route('pesantren') }}"
                class="card card-interactive group p-6">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700">
                    <x-heroicon-o-building-library class="size-6" />
                </div>

                <h3 class="mt-5 flex items-center justify-between gap-3 text-lg font-bold text-brand-950">
                    Dunia pesantren
                    <x-heroicon-o-arrow-up-right class="size-5 shrink-0 transition group-hover:translate-x-1" />
                </h3>

                <p class="mt-3 text-sm leading-7 text-muted">
                    Informasi mengenai kehidupan pesantren, pendidikan, dan
                    upaya membangun lingkungan belajar yang aman.
                </p>
            </a>

            {{-- Layanan dan perlindungan --}}
            <a
                href="{{ route('layanan') }}"
                class="card card-interactive group p-6">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700">
                    <x-heroicon-o-heart class="size-6" />
                </div>

                <h3 class="mt-5 flex items-center justify-between gap-3 text-lg font-bold text-brand-950">
                    Layanan dan perlindungan
                    <x-heroicon-o-arrow-up-right class="size-5 shrink-0 transition group-hover:translate-x-1" />
                </h3>

                <p class="mt-3 text-sm leading-7 text-muted">
                    Informasi mengenai akses bantuan, keselamatan santri, dan
                    prinsip penanganan pengaduan yang bertanggung jawab.
                </p>
            </a>

            {{-- Program organisasi --}}
            <a
                href="{{ route('program') }}"
                class="card card-interactive group p-6">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700">
                    <x-heroicon-o-rocket-launch class="size-6" />
                </div>

                <h3 class="mt-5 flex items-center justify-between gap-3 text-lg font-bold text-brand-950">
                    Program organisasi
                    <x-heroicon-o-arrow-up-right class="size-5 shrink-0 transition group-hover:translate-x-1" />
                </h3>

                <p class="mt-3 text-sm leading-7 text-muted">
                    Kenali arah kegiatan, agenda, dan inisiatif untuk mendukung
                    santri dan komunitas pesantren.
                </p>
            </a>

            {{-- Santripreneur --}}
            <a
                href="{{ route('santripreneur') }}"
                class="card card-interactive group p-6">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700">
                    <x-heroicon-o-light-bulb class="size-6" />
                </div>

                <h3 class="mt-5 flex items-center justify-between gap-3 text-lg font-bold text-brand-950">
                    Santripreneur
                    <x-heroicon-o-arrow-up-right class="size-5 shrink-0 transition group-hover:translate-x-1" />
                </h3>

                <p class="mt-3 text-sm leading-7 text-muted">
                    Informasi tentang kewirausahaan, inovasi, dan pengembangan
                    kemandirian santri.
                </p>
            </a>

            {{-- Media dan dokumentasi --}}
            <a
                href="{{ route('media') }}"
                class="card card-interactive group p-6">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700">
                    <x-heroicon-o-photo class="size-6" />
                </div>

                <h3 class="mt-5 flex items-center justify-between gap-3 text-lg font-bold text-brand-950">
                    Media dan dokumentasi
                    <x-heroicon-o-arrow-up-right class="size-5 shrink-0 transition group-hover:translate-x-1" />
                </h3>

                <p class="mt-3 text-sm leading-7 text-muted">
                    Jelajahi materi visual, dokumentasi kegiatan, dan sumber
                    informasi yang dipublikasikan organisasi.
                </p>
            </a>

            {{-- Kontak dan komunikasi --}}
            <a
                href="{{ route('kontak') }}"
                class="card card-interactive group p-6">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700">
                    <x-heroicon-o-chat-bubble-left-right class="size-6" />
                </div>

                <h3 class="mt-5 flex items-center justify-between gap-3 text-lg font-bold text-brand-950">
                    Kontak dan komunikasi
                    <x-heroicon-o-arrow-up-right class="size-5 shrink-0 transition group-hover:translate-x-1" />
                </h3>

                <p class="mt-3 text-sm leading-7 text-muted">
                    Temukan jalur komunikasi untuk pertanyaan umum, aspirasi,
                    dan penjajakan kerja sama.
                </p>
            </a>
        </div>
    </div>
</section>
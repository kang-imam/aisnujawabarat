<section id="perlindungan" aria-labelledby="perlindungan-title" class="section-space bg-canvas text-ink">
    <div class="container-site">
        <div class="grid gap-8 lg:grid-cols-[minmax(0,0.9fr)_minmax(0,1.1fr)] lg:items-center lg:gap-16">
            <div>
                <span class="section-eyebrow">Edukasi Perlindungan Santri</span>
                <h2 id="perlindungan-title" class="section-title">Pesantren Aman Dimulai dari Kepedulian dan Tindakan.</h2>
                <p class="section-description">Setiap santri berhak belajar, bertumbuh, dan menjalani kehidupan pesantren dengan rasa aman serta martabat yang dihormati. Perlindungan membutuhkan kepedulian, pemahaman, dan keberanian untuk mencari bantuan ketika diperlukan.</p>
                <div class="mt-7 flex flex-col gap-3 sm:flex-row">
                    <a href="{{ route('informasi') }}" class="btn btn-primary w-full sm:w-auto">
                        Pelajari Perlindungan
                        <x-heroicon-o-arrow-right class="size-4" aria-hidden="true" />
                    </a>
                    <a href="{{ route('layanan') }}" class="btn btn-outline w-full sm:w-auto">
                        Lihat Layanan
                    </a>
                </div>
                <div class="mt-8 flex items-start gap-3 border-t border-line pt-6">
                    <span class="flex size-10 shrink-0 items-center justify-center rounded-full bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                        <x-heroicon-o-heart class="size-5" aria-hidden="true" />
                    </span>
                    <p class="text-sm leading-7 text-muted">Dengarkan tanpa menghakimi, utamakan keselamatan, dan bantu mencari pertolongan yang sesuai.</p>
                </div>
            </div>
            <div class="relative">
                <div class="pointer-events-none absolute -inset-3 rounded-card border border-brand-200/70 dark:border-brand-200/30" aria-hidden="true"></div>
                <div class="relative overflow-hidden rounded-card border border-line bg-surface p-5 shadow-card sm:p-7">
                    <div class="flex items-start justify-between gap-4 border-b border-line pb-5">
                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.15em] text-brand-600 dark:text-brand-500">Panduan Kepedulian</p>
                            <h3 class="mt-2 text-xl font-bold text-brand-800 dark:text-brand-900">Apa yang bisa kita lakukan?</h3>
                        </div>
                        <span class="flex size-12 shrink-0 items-center justify-center rounded-control bg-accent-light text-warning">
                            <x-heroicon-o-shield-check class="size-6" aria-hidden="true" />
                        </span>
                    </div>
                    <ol class="mt-2 divide-y divide-line">
                        <li class="flex gap-4 py-5">
                            <span class="flex size-9 shrink-0 items-center justify-center rounded-full bg-brand-50 text-sm font-bold text-brand-700 dark:bg-brand-100 dark:text-brand-900">01</span>
                            <div>
                                <h4 class="text-base font-bold text-brand-800 dark:text-brand-900">Kenali tanda dan situasi berisiko</h4>
                                <p class="mt-1 text-sm leading-7 text-muted">Perhatikan perubahan perilaku, tanda ketidaknyamanan, atau informasi yang menunjukkan kemungkinan adanya ancaman terhadap keselamatan santri.</p>
                            </div>
                        </li>
                        <li class="flex gap-4 py-5">
                            <span class="flex size-9 shrink-0 items-center justify-center rounded-full bg-brand-50 text-sm font-bold text-brand-700 dark:bg-brand-100 dark:text-brand-900">02</span>
                            <div>
                                <h4 class="text-base font-bold text-brand-800 dark:text-brand-900">Dengarkan dan utamakan keselamatan</h4>
                                <p class="mt-1 text-sm leading-7 text-muted">Tanggapi dengan tenang, hindari menyalahkan korban, jaga privasi, dan jangan memaksa seseorang menceritakan pengalaman berulang kali.</p>
                            </div>
                        </li>
                        <li class="flex gap-4 py-5">
                            <span class="flex size-9 shrink-0 items-center justify-center rounded-full bg-brand-50 text-sm font-bold text-brand-700 dark:bg-brand-100 dark:text-brand-900">03</span>
                            <div>
                                <h4 class="text-base font-bold text-brand-800 dark:text-brand-900">Cari bantuan yang tepat</h4>
                                <p class="mt-1 text-sm leading-7 text-muted">Hubungi pihak tepercaya atau layanan yang kompeten. Jika ada bahaya langsung, prioritaskan tempat aman dan bantuan darurat setempat.</p>
                            </div>
                        </li>
                    </ol>
                    <div class="rounded-control border border-brand-200/70 bg-brand-50 p-4 dark:border-brand-200/30 dark:bg-brand-50">
                        <div class="flex items-start gap-3">
                            <x-heroicon-o-information-circle class="mt-0.5 size-5 shrink-0 text-brand-700 dark:text-brand-500" aria-hidden="true" />
                            <p class="text-sm leading-6 text-brand-800 dark:text-brand-900">Keselamatan dan kebutuhan korban harus menjadi prioritas. Hindari menyebarkan identitas, foto, atau detail kejadian tanpa izin.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-5 grid grid-cols-2 gap-4">
                    <a href="{{ route('informasi') }}" class="group rounded-card border border-line bg-surface p-4 transition-colors hover:border-brand-300 sm:p-5">
                        <span class="flex size-10 items-center justify-center rounded-control bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                            <x-heroicon-o-book-open class="size-5" aria-hidden="true" />
                        </span>
                        <span class="mt-3 block text-sm font-bold text-brand-800 group-hover:text-brand-600 dark:text-brand-900 dark:group-hover:text-brand-500">Baca Informasi</span>
                        <span class="mt-1 block text-xs leading-5 text-muted">Pahami hak dan langkah perlindungan.</span>
                    </a>
                    <a href="{{ route('kontak') }}" class="group rounded-card border border-line bg-surface p-4 transition-colors hover:border-brand-300 sm:p-5">
                        <span class="flex size-10 items-center justify-center rounded-control bg-accent-light text-warning">
                            <x-heroicon-o-chat-bubble-left-right class="size-5" aria-hidden="true" />
                        </span>
                        <span class="mt-3 block text-sm font-bold text-brand-800 group-hover:text-brand-600 dark:text-brand-900 dark:group-hover:text-brand-500">Hubungi Kami</span>
                        <span class="mt-1 block text-xs leading-5 text-muted">Temukan kanal komunikasi yang tersedia.</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
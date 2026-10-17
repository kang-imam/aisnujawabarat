<section
    id="ajakan"
    aria-labelledby="ajakan-title"
    class="section-space bg-canvas">
    <div class="container-site">
        <div class="relative overflow-hidden rounded-[1.5rem] border border-line bg-surface shadow-card">
            <div
                aria-hidden="true"
                class="absolute inset-y-0 left-0 w-1.5 bg-brand-600"></div>

            <div class="grid lg:grid-cols-[minmax(0,1fr)_18rem]">
                <div class="relative px-6 py-8 sm:px-9 sm:py-10 lg:px-12 lg:py-12">
                    <div
                        aria-hidden="true"
                        class="pointer-events-none absolute -right-12 -top-16 h-44 w-44 rounded-full border border-brand-200/50"></div>

                    <div class="relative">
                        <span class="section-eyebrow">
                            Bersama Melindungi Santri
                        </span>

                        <h2
                            id="ajakan-title"
                            class="max-w-2xl text-3xl font-bold leading-tight tracking-tight text-ink sm:text-4xl">
                            Pesantren Aman Tumbuh dari Kepedulian Bersama.
                        </h2>

                        <p class="mt-5 max-w-2xl text-sm leading-7 text-muted sm:text-base sm:leading-8">
                            Perlindungan santri membutuhkan kepedulian, keberanian untuk bersuara, dan kerja sama berbagai pihak. Mulailah dengan memahami informasi yang tersedia dan menemukan layanan yang sesuai dengan kebutuhan.
                        </p>

                        <div class="mt-7 flex flex-col gap-3 sm:flex-row sm:flex-wrap">
                            <a
                                href="{{ route('layanan') }}"
                                class="btn btn-primary">
                                <x-heroicon-o-shield-check class="h-5 w-5 shrink-0" />
                                Jelajahi Layanan
                                <x-heroicon-o-arrow-right class="h-4 w-4 shrink-0" />
                            </a>

                            <a
                                href="{{ route('informasi') }}"
                                class="btn btn-outline">
                                <x-heroicon-o-book-open class="h-5 w-5 shrink-0" />
                                Pelajari Informasi
                            </a>
                        </div>
                    </div>
                </div>

                <aside class="border-t border-line bg-canvas px-6 py-7 sm:px-9 lg:border-l lg:border-t-0 lg:px-7 lg:py-10">
                    <div class="flex h-11 w-11 items-center justify-center rounded-xl border border-brand-200 bg-brand-50 text-brand-700">
                        <x-heroicon-o-chat-bubble-left-right class="h-5 w-5" />
                    </div>

                    <h3 class="mt-5 text-lg font-bold leading-snug text-ink">
                        Ingin Menghubungi AISNU Jawa Barat?
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-muted">
                        Kunjungi halaman kontak untuk melihat informasi komunikasi dan menyampaikan pertanyaan kepada organisasi.
                    </p>

                    <a
                        href="{{ route('kontak') }}"
                        class="mt-5 inline-flex min-h-10 items-center gap-2 font-bold text-brand-700 transition-colors hover:text-brand-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent dark:text-brand-600 dark:hover:text-brand-400">
                        Buka Halaman Kontak
                        <x-heroicon-o-arrow-up-right class="h-4 w-4 shrink-0" />
                    </a>

                    <div class="mt-7 border-t border-line pt-5">
                        <p class="flex items-start gap-2.5 text-xs leading-6 text-muted">
                            <x-heroicon-o-heart class="mt-0.5 h-4 w-4 shrink-0 text-accent" />
                            <span>
                                Kepedulian, informasi yang tepat, dan kolaborasi adalah bagian dari upaya membangun lingkungan pesantren yang aman.
                            </span>
                        </p>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@php
$socialLinks = [
['label' => 'Instagram', 'url' => config('services.aisnu.instagram')],
['label' => 'Facebook', 'url' => config('services.aisnu.facebook')],
['label' => 'YouTube', 'url' => config('services.aisnu.youtube')],
];

$socialLinks = collect($socialLinks)
->filter(fn ($social) => filled($social['url']));

$exploreLinks = [
['label' => 'Profil organisasi', 'route' => 'profil'],
['label' => 'Berita terkini', 'route' => 'berita.index'],
['label' => 'Publikasi', 'route' => 'publikasi.index'],
['label' => 'Informasi', 'route' => 'informasi'],
['label' => 'Media', 'route' => 'media'],
];

$programLinks = [
['label' => 'Program unggulan', 'route' => 'program'],
['label' => 'Layanan', 'route' => 'layanan'],
['label' => 'Pesantren', 'route' => 'pesantren'],
['label' => 'Santripreneur', 'route' => 'santripreneur'],
['label' => 'Kemitraan', 'route' => 'kemitraan'],
];
@endphp

<footer
    id="footer"
    class="relative isolate overflow-hidden bg-brand-600 text-white dark:bg-[#0b2924]">
    {{-- Aksen visual bagian atas --}}
    <div
        class="pointer-events-none absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-brand-400 via-accent to-brand-400"
        aria-hidden="true"></div>

    {{-- Ornamen dekoratif --}}
    <div
        class="pointer-events-none absolute -right-24 -top-28 size-80 rounded-full bg-accent/10 blur-3xl sm:size-96"
        aria-hidden="true"></div>

    <div
        class="pointer-events-none absolute -bottom-36 -left-24 size-80 rounded-full bg-white/[0.04] blur-3xl"
        aria-hidden="true"></div>

    <div class="container-site relative">
        {{-- Area utama --}}
        <div class="grid gap-12 py-14 sm:py-16 lg:grid-cols-12 lg:gap-14 lg:py-20">

            {{-- Identitas AISNU --}}
            <div class="lg:col-span-5">
                <a
                    href="{{ route('beranda') }}"
                    aria-label="AISNU Jawa Barat — kembali ke beranda"
                    class="group inline-flex max-w-full items-center gap-3.5 rounded-xl focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">
                    <span class="flex size-14 shrink-0 items-center justify-center rounded-2xl border border-white/15 bg-white p-2 shadow-sm transition-transform duration-300 group-hover:-translate-y-0.5 sm:size-[4.25rem]">
                        <img
                            src="{{ asset('images/logo_aisnu_jabar_warna.png') }}"
                            alt=""
                            aria-hidden="true"
                            width="180"
                            height="64"
                            loading="lazy"
                            decoding="async"
                            class="h-full w-full object-contain">
                    </span>

                    <span class="min-w-0">
                        <span class="block text-lg font-bold leading-tight tracking-tight text-white sm:text-xl">
                            AISNU Jawa Barat
                        </span>

                        <span class="mt-1.5 block text-[10px] font-semibold uppercase leading-relaxed tracking-[0.13em] text-white/70 sm:text-[11px] sm:tracking-[0.15em]">
                            Jabar Emas Butuh Santri Cerdas
                        </span>
                    </span>
                </a>

                <div class="mt-7 max-w-lg">
                    <p class="text-sm leading-7 text-white/80 sm:text-[15px]">
                        Menghubungkan gagasan, memperluas kolaborasi, dan mendorong kontribusi santri untuk kemajuan masyarakat serta masa depan Jawa Barat.
                    </p>
                </div>

                <a
                    href="{{ route('profil') }}"
                    class="group mt-5 inline-flex min-h-10 items-center gap-2 rounded-sm text-sm font-semibold text-white transition-colors hover:text-accent focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">
                    Kenali organisasi kami

                    <x-heroicon-o-arrow-up-right class="size-4 transition-transform duration-200 group-hover:translate-x-0.5 group-hover:-translate-y-0.5" />
                </a>

                {{-- Media sosial --}}
                @if($socialLinks->isNotEmpty())
                <div class="mt-8 border-t border-white/15 pt-6">
                    <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-white/60">
                        Terhubung bersama kami
                    </p>

                    <nav
                        aria-label="Media sosial AISNU Jawa Barat"
                        class="mt-4">
                        <ul class="flex flex-wrap gap-2">
                            @foreach($socialLinks as $social)
                            <li>
                                <a
                                    href="{{ $social['url'] }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    aria-label="{{ $social['label'] }} AISNU Jawa Barat, buka di tab baru"
                                    class="inline-flex min-h-10 items-center gap-2 rounded-control border border-white/20 px-3.5 py-2 text-xs font-semibold text-white/85 transition-colors hover:border-accent hover:bg-white/[0.07] hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">
                                    {{ $social['label'] }}

                                    <x-heroicon-o-arrow-up-right class="size-3.5 shrink-0" />
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
                @endif
            </div>

            {{-- Navigasi dan kontak --}}
            <div class="grid grid-cols-2 gap-x-6 gap-y-10 sm:gap-x-10 lg:col-span-7 lg:grid-cols-3">

                {{-- Jelajahi --}}
                <nav aria-label="Jelajahi situs">
                    <h2 class="text-sm font-bold tracking-tight text-white">
                        Jelajahi
                    </h2>

                    <div class="mt-3 h-0.5 w-8 rounded-full bg-accent"></div>

                    <ul class="mt-5 space-y-3">
                        @foreach($exploreLinks as $link)
                        <li>
                            <a
                                href="{{ route($link['route']) }}"
                                class="group inline-flex items-start gap-2 text-sm leading-6 text-white/75 transition-colors hover:text-white focus-visible:rounded-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">
                                <span
                                    class="mt-[0.65rem] size-1.5 shrink-0 rounded-full bg-white/30 transition-colors group-hover:bg-accent"
                                    aria-hidden="true"></span>

                                <span>{{ $link['label'] }}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </nav>

                {{-- Program --}}
                <nav aria-label="Program dan layanan">
                    <h2 class="text-sm font-bold tracking-tight text-white">
                        Program
                    </h2>

                    <div class="mt-3 h-0.5 w-8 rounded-full bg-accent"></div>

                    <ul class="mt-5 space-y-3">
                        @foreach($programLinks as $link)
                        <li>
                            <a
                                href="{{ route($link['route']) }}"
                                class="group inline-flex items-start gap-2 text-sm leading-6 text-white/75 transition-colors hover:text-white focus-visible:rounded-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">
                                <span
                                    class="mt-[0.65rem] size-1.5 shrink-0 rounded-full bg-white/30 transition-colors group-hover:bg-accent"
                                    aria-hidden="true"></span>

                                <span>{{ $link['label'] }}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </nav>

                {{-- Kontak --}}
                <section class="col-span-2 sm:col-span-1" aria-labelledby="footer-contact-heading">
                    <h2
                        id="footer-contact-heading"
                        class="text-sm font-bold tracking-tight text-white">
                        Mari berkolaborasi
                    </h2>

                    <div class="mt-3 h-0.5 w-8 rounded-full bg-accent"></div>

                    <p class="mt-5 text-sm leading-7 text-white/75">
                        Punya ide, pertanyaan, atau rencana kolaborasi? Kami terbuka untuk membangun inisiatif bersama.
                    </p>

                    <a
                        href="{{ route('kontak') }}"
                        class="btn btn-accent mt-5 inline-flex w-full sm:w-auto">
                        Hubungi kami

                        <x-heroicon-o-arrow-right class="size-4 shrink-0" />
                    </a>

                    <a
                        href="{{ route('legal') }}"
                        class="mt-4 inline-flex min-h-9 items-center gap-2 rounded-sm text-sm text-white/75 transition-colors hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">
                        Informasi legal

                        <x-heroicon-o-arrow-up-right class="size-3.5 shrink-0" />
                    </a>
                </section>
            </div>
        </div>

        {{-- Bagian bawah --}}
        <div class="border-t border-white/15">
            <div class="flex flex-col gap-4 py-6 sm:flex-row sm:items-center sm:justify-between">
                <p class="text-xs leading-6 text-white/65">
                    &copy; {{ date('Y') }} AISNU Jawa Barat.
                    Hak cipta dilindungi.
                </p>

                <nav
                    aria-label="Tautan legal dan navigasi tambahan"
                    class="flex flex-wrap items-center gap-x-5 gap-y-3 text-xs">
                    <a
                        href="{{ route('legal') }}"
                        class="rounded-sm text-white/75 transition-colors hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">
                        Kebijakan & ketentuan
                    </a>

                    <a
                        href="{{ route('kontak') }}"
                        class="rounded-sm text-white/75 transition-colors hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">
                        Kontak
                    </a>

                    <a
                        href="#konten-utama"
                        class="group inline-flex min-h-8 items-center gap-1.5 rounded-sm font-semibold text-white transition-colors hover:text-accent focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent"
                        aria-label="Kembali ke bagian atas halaman">
                        Kembali ke atas

                        <x-heroicon-o-chevron-up class="size-4 transition-transform duration-200 group-hover:-translate-y-0.5" />
                    </a>
                </nav>
            </div>
        </div>
    </div>
</footer>
<header
    x-data="siteNavigation"
    @keydown.escape.window="closeMobileMenu()"
    class="sticky top-0 z-50 border-b border-line bg-surface/95 text-ink shadow-sm backdrop-blur-xl">
    <div class="container-site">
        <div class="flex min-h-20 items-center justify-between gap-3">

            {{-- Identitas organisasi --}}
            <a
                href="{{ route('beranda') }}"
                class="group flex min-w-0 shrink-0 items-center gap-3 rounded-lg"
                aria-label="AISNU Jawa Barat, halaman beranda">
                <img
                    src="{{ asset('images/logo_aisnu_jabar_warna.png') }}"
                    alt="Logo AISNU Jawa Barat"
                    width="180"
                    height="64"
                    fetchpriority="high"
                    class="h-10 w-auto max-w-[135px] object-contain dark:hidden sm:h-12 sm:max-w-[180px]">

                <img
                    src="{{ asset('images/logo_aisnu_jabar_putih.png') }}"
                    alt=""
                    aria-hidden="true"
                    width="180"
                    height="64"
                    class="hidden h-10 w-auto max-w-[135px] object-contain dark:block sm:h-12 sm:max-w-[180px]">

                <span class="hidden min-w-0 flex-col border-l border-line pl-3 sm:flex">
                    <span class="text-sm font-bold leading-tight tracking-tight text-brand-800 lg:text-base">
                        AISNU Jawa Barat
                    </span>
                    <span class="mt-1 text-[10px] font-semibold uppercase tracking-[0.1em] text-muted lg:text-[11px]">
                        Jabar Emas Butuh Santri Cerdas
                    </span>
                </span>
            </a>

            {{-- Navigasi desktop --}}
            <nav
                class="hidden items-center gap-1 xl:flex"
                aria-label="Navigasi utama">
                {{-- Beranda --}}
                <a
                    href="{{ route('beranda') }}"
                    @class([ 'rounded-lg px-3 py-2 text-sm font-semibold transition-colors' , 'bg-brand-50 text-brand-800'=> request()->routeIs('beranda'),
                    'text-muted hover:bg-brand-50 hover:text-brand-800' => !request()->routeIs('beranda'),
                    ])
                    @if(request()->routeIs('beranda')) aria-current="page" @endif
                    >
                    Beranda
                </a>

                {{-- Organisasi --}}
                <div
                    class="relative"
                    x-data="{ open: false }"
                    @click.outside="open = false">
                    <button
                        type="button"
                        @click="open = !open"
                        @keydown.escape.stop="open = false"
                        :aria-expanded="open.toString()"
                        aria-controls="menu-organisasi"
                        @class([ 'inline-flex items-center gap-1 rounded-lg px-3 py-2 text-sm font-semibold transition-colors' , 'bg-brand-50 text-brand-800'=> request()->routeIs('informasi', 'profil', 'kemitraan', 'kontak'),
                        'text-muted hover:bg-brand-50 hover:text-brand-800' => !request()->routeIs('informasi', 'profil', 'kemitraan', 'kontak'),
                        ])
                        >
                        Organisasi
                        <x-heroicon-o-chevron-down
                            class="size-4 transition-transform"
                            ::class="{ 'rotate-180': open }" />
                    </button>

                    <div
                        id="menu-organisasi"
                        x-cloak
                        x-show="open"
                        x-transition.origin.top.left
                        class="absolute left-0 top-full z-50 mt-2 w-60 rounded-xl border border-line bg-surface p-2 text-ink shadow-xl">
                        <a
                            href="{{ route('informasi') }}"
                            @class([ 'block rounded-lg px-3 py-2.5 text-sm transition-colors' , 'bg-brand-50 font-semibold text-brand-800'=> request()->routeIs('informasi'),
                            'text-muted hover:bg-brand-50 hover:text-brand-800' => !request()->routeIs('informasi'),
                            ])
                            @if(request()->routeIs('informasi')) aria-current="page" @endif
                            >Informasi organisasi</a>

                        <a
                            href="{{ route('profil') }}"
                            @class([ 'block rounded-lg px-3 py-2.5 text-sm transition-colors' , 'bg-brand-50 font-semibold text-brand-800'=> request()->routeIs('profil'),
                            'text-muted hover:bg-brand-50 hover:text-brand-800' => !request()->routeIs('profil'),
                            ])
                            @if(request()->routeIs('profil')) aria-current="page" @endif
                            >Profil AISNU</a>

                        <a
                            href="{{ route('kemitraan') }}"
                            @class([ 'block rounded-lg px-3 py-2.5 text-sm transition-colors' , 'bg-brand-50 font-semibold text-brand-800'=> request()->routeIs('kemitraan'),
                            'text-muted hover:bg-brand-50 hover:text-brand-800' => !request()->routeIs('kemitraan'),
                            ])
                            @if(request()->routeIs('kemitraan')) aria-current="page" @endif
                            >Kemitraan</a>

                        <a
                            href="{{ route('kontak') }}"
                            @class([ 'block rounded-lg px-3 py-2.5 text-sm transition-colors' , 'bg-brand-50 font-semibold text-brand-800'=> request()->routeIs('kontak'),
                            'text-muted hover:bg-brand-50 hover:text-brand-800' => !request()->routeIs('kontak'),
                            ])
                            @if(request()->routeIs('kontak')) aria-current="page" @endif
                            >Kontak</a>
                    </div>
                </div>

                {{-- Program dan layanan --}}
                <div
                    class="relative"
                    x-data="{ open: false }"
                    @click.outside="open = false">
                    <button
                        type="button"
                        @click="open = !open"
                        @keydown.escape.stop="open = false"
                        :aria-expanded="open.toString()"
                        aria-controls="menu-program"
                        @class([ 'inline-flex items-center gap-1 rounded-lg px-3 py-2 text-sm font-semibold transition-colors' , 'bg-brand-50 text-brand-800'=> request()->routeIs('layanan', 'pesantren', 'program', 'santripreneur'),
                        'text-muted hover:bg-brand-50 hover:text-brand-800' => !request()->routeIs('layanan', 'pesantren', 'program', 'santripreneur'),
                        ])
                        >
                        Program & layanan
                        <x-heroicon-o-chevron-down
                            class="size-4 transition-transform"
                            ::class="{ 'rotate-180': open }" />
                    </button>

                    <div
                        id="menu-program"
                        x-cloak
                        x-show="open"
                        x-transition.origin.top.left
                        class="absolute left-0 top-full z-50 mt-2 w-60 rounded-xl border border-line bg-surface p-2 text-ink shadow-xl">
                        <a
                            href="{{ route('program') }}"
                            @class([ 'block rounded-lg px-3 py-2.5 text-sm transition-colors' , 'bg-brand-50 font-semibold text-brand-800'=> request()->routeIs('program'),
                            'text-muted hover:bg-brand-50 hover:text-brand-800' => !request()->routeIs('program'),
                            ])
                            @if(request()->routeIs('program')) aria-current="page" @endif
                            >Program unggulan</a>

                        <a
                            href="{{ route('layanan') }}"
                            @class([ 'block rounded-lg px-3 py-2.5 text-sm transition-colors' , 'bg-brand-50 font-semibold text-brand-800'=> request()->routeIs('layanan'),
                            'text-muted hover:bg-brand-50 hover:text-brand-800' => !request()->routeIs('layanan'),
                            ])
                            @if(request()->routeIs('layanan')) aria-current="page" @endif
                            >Layanan</a>

                        <a
                            href="{{ route('pesantren') }}"
                            @class([ 'block rounded-lg px-3 py-2.5 text-sm transition-colors' , 'bg-brand-50 font-semibold text-brand-800'=> request()->routeIs('pesantren'),
                            'text-muted hover:bg-brand-50 hover:text-brand-800' => !request()->routeIs('pesantren'),
                            ])
                            @if(request()->routeIs('pesantren')) aria-current="page" @endif
                            >Pesantren</a>

                        <a
                            href="{{ route('santripreneur') }}"
                            @class([ 'block rounded-lg px-3 py-2.5 text-sm transition-colors' , 'bg-brand-50 font-semibold text-brand-800'=> request()->routeIs('santripreneur'),
                            'text-muted hover:bg-brand-50 hover:text-brand-800' => !request()->routeIs('santripreneur'),
                            ])
                            @if(request()->routeIs('santripreneur')) aria-current="page" @endif
                            >Santripreneur</a>
                    </div>
                </div>

                {{-- Wawasan --}}
                <div
                    class="relative"
                    x-data="{ open: false }"
                    @click.outside="open = false">
                    <button
                        type="button"
                        @click="open = !open"
                        @keydown.escape.stop="open = false"
                        :aria-expanded="open.toString()"
                        aria-controls="menu-wawasan"
                        @class([ 'inline-flex items-center gap-1 rounded-lg px-3 py-2 text-sm font-semibold transition-colors' , 'bg-brand-50 text-brand-800'=> request()->routeIs('berita.*', 'media', 'publikasi.*'),
                        'text-muted hover:bg-brand-50 hover:text-brand-800' => !request()->routeIs('berita.*', 'media', 'publikasi.*'),
                        ])
                        >
                        Wawasan
                        <x-heroicon-o-chevron-down
                            class="size-4 transition-transform"
                            ::class="{ 'rotate-180': open }" />
                    </button>

                    <div
                        id="menu-wawasan"
                        x-cloak
                        x-show="open"
                        x-transition.origin.top.left
                        class="absolute left-0 top-full z-50 mt-2 w-60 rounded-xl border border-line bg-surface p-2 text-ink shadow-xl">
                        <a
                            href="{{ route('berita.index') }}"
                            @class([ 'block rounded-lg px-3 py-2.5 text-sm transition-colors' , 'bg-brand-50 font-semibold text-brand-800'=> request()->routeIs('berita.*'),
                            'text-muted hover:bg-brand-50 hover:text-brand-800' => !request()->routeIs('berita.*'),
                            ])
                            @if(request()->routeIs('berita.*')) aria-current="page" @endif
                            >Berita</a>

                        <a
                            href="{{ route('media') }}"
                            @class([ 'block rounded-lg px-3 py-2.5 text-sm transition-colors' , 'bg-brand-50 font-semibold text-brand-800'=> request()->routeIs('media'),
                            'text-muted hover:bg-brand-50 hover:text-brand-800' => !request()->routeIs('media'),
                            ])
                            @if(request()->routeIs('media')) aria-current="page" @endif
                            >Media</a>

                        <a
                            href="{{ route('publikasi.index') }}"
                            @class([ 'block rounded-lg px-3 py-2.5 text-sm transition-colors' , 'bg-brand-50 font-semibold text-brand-800'=> request()->routeIs('publikasi.*'),
                            'text-muted hover:bg-brand-50 hover:text-brand-800' => !request()->routeIs('publikasi.*'),
                            ])
                            @if(request()->routeIs('publikasi.*')) aria-current="page" @endif
                            >Publikasi</a>
                    </div>
                </div>
            </nav>

            {{-- Aksi desktop --}}
            <div class="hidden shrink-0 items-center gap-2 xl:flex">
                <a
                    href="{{ route('pencarian') }}"
                    aria-label="Cari di website"
                    title="Cari di website"
                    class="inline-flex size-10 items-center justify-center rounded-lg text-brand-800 transition-colors hover:bg-brand-50 dark:text-brand-700">
                    <x-heroicon-o-magnifying-glass class="size-5" />
                </a>

                @include('components.partials.theme-toggle', ['id' => 'theme-desktop'])

                <a href="{{ route('program') }}" class="btn btn-primary">
                    Jelajahi program
                    <x-heroicon-o-arrow-right class="size-4" />
                </a>
            </div>

            {{-- Aksi mobile --}}
            <div class="flex shrink-0 items-center gap-1.5 xl:hidden">
                <a
                    href="{{ route('pencarian') }}"
                    aria-label="Cari di website"
                    title="Cari di website"
                    class="inline-flex size-10 items-center justify-center rounded-lg text-brand-800 transition-colors hover:bg-brand-50 dark:text-brand-700">
                    <x-heroicon-o-magnifying-glass class="size-5" />
                </a>

                @include('components.partials.theme-toggle', ['id' => 'theme-mobile'])

                <button
                    type="button"
                    @click="toggleMobileMenu()"
                    :aria-expanded="mobileMenuOpen.toString()"
                    aria-controls="navigasi-mobile"
                    :aria-label="mobileMenuOpen ? 'Tutup menu navigasi' : 'Buka menu navigasi'"
                    class="inline-flex size-10 items-center justify-center rounded-xl border border-line text-brand-800 transition-colors hover:bg-brand-50 focus-visible:outline-brand-600 dark:text-brand-700">
                    <x-heroicon-o-x-mark
                        x-cloak
                        x-show="mobileMenuOpen"
                        class="size-6" />
                    <x-heroicon-o-bars-3
                        x-show="!mobileMenuOpen"
                        class="size-6" />
                </button>
            </div>
        </div>
    </div>

    {{-- Navigasi mobile --}}
    <div
        id="navigasi-mobile"
        x-cloak
        x-show="mobileMenuOpen"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="border-t border-line bg-surface text-ink xl:hidden">
        <nav
            class="container-site flex max-h-[calc(100dvh-5rem)] flex-col gap-1 overflow-y-auto py-4"
            aria-label="Navigasi mobile">
            {{-- Beranda --}}
            <a
                href="{{ route('beranda') }}"
                @class([ 'flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold transition-colors' , 'bg-brand-50 text-brand-800'=> request()->routeIs('beranda'),
                'text-muted hover:bg-brand-50 hover:text-brand-800' => !request()->routeIs('beranda'),
                ])
                @if(request()->routeIs('beranda')) aria-current="page" @endif
                @click="closeMobileMenu()"
                >
                <x-heroicon-o-home class="size-5 shrink-0" />
                Beranda
            </a>

            {{-- Organisasi mobile --}}
            <div
                class="rounded-xl"
                x-data="{ open: {{ request()->routeIs('informasi', 'profil', 'kemitraan', 'kontak') ? 'true' : 'false' }} }">
                <button
                    type="button"
                    @click="open = !open"
                    :aria-expanded="open.toString()"
                    aria-controls="mobile-organisasi"
                    class="flex w-full items-center justify-between rounded-xl px-4 py-3 text-sm font-semibold text-muted transition-colors hover:bg-brand-50 hover:text-brand-800">
                    <span class="flex items-center gap-3">
                        <x-heroicon-o-building-office-2 class="size-5 shrink-0" />
                        Organisasi
                    </span>
                    <x-heroicon-o-chevron-down
                        class="size-4 transition-transform"
                        ::class="{ 'rotate-180': open }" />
                </button>

                <div
                    id="mobile-organisasi"
                    x-cloak
                    x-show="open"
                    x-transition
                    class="ml-5 border-l border-line py-1 pl-3">
                    <a
                        href="{{ route('informasi') }}"
                        @class([ 'block rounded-lg px-3 py-2.5 text-sm transition-colors' , 'bg-brand-50 font-semibold text-brand-800'=> request()->routeIs('informasi'),
                        'text-muted hover:bg-brand-50 hover:text-brand-800' => !request()->routeIs('informasi'),
                        ])
                        @if(request()->routeIs('informasi')) aria-current="page" @endif
                        @click="closeMobileMenu()"
                        >Informasi organisasi</a>

                    <a
                        href="{{ route('profil') }}"
                        @class([ 'block rounded-lg px-3 py-2.5 text-sm transition-colors' , 'bg-brand-50 font-semibold text-brand-800'=> request()->routeIs('profil'),
                        'text-muted hover:bg-brand-50 hover:text-brand-800' => !request()->routeIs('profil'),
                        ])
                        @if(request()->routeIs('profil')) aria-current="page" @endif
                        @click="closeMobileMenu()"
                        >Profil AISNU</a>

                    <a
                        href="{{ route('kemitraan') }}"
                        @class([ 'block rounded-lg px-3 py-2.5 text-sm transition-colors' , 'bg-brand-50 font-semibold text-brand-800'=> request()->routeIs('kemitraan'),
                        'text-muted hover:bg-brand-50 hover:text-brand-800' => !request()->routeIs('kemitraan'),
                        ])
                        @if(request()->routeIs('kemitraan')) aria-current="page" @endif
                        @click="closeMobileMenu()"
                        >Kemitraan</a>

                    <a
                        href="{{ route('kontak') }}"
                        @class([ 'block rounded-lg px-3 py-2.5 text-sm transition-colors' , 'bg-brand-50 font-semibold text-brand-800'=> request()->routeIs('kontak'),
                        'text-muted hover:bg-brand-50 hover:text-brand-800' => !request()->routeIs('kontak'),
                        ])
                        @if(request()->routeIs('kontak')) aria-current="page" @endif
                        @click="closeMobileMenu()"
                        >Kontak</a>
                </div>
            </div>

            {{-- Program dan layanan mobile --}}
            <div
                class="rounded-xl"
                x-data="{ open: {{ request()->routeIs('layanan', 'pesantren', 'program', 'santripreneur') ? 'true' : 'false' }} }">
                <button
                    type="button"
                    @click="open = !open"
                    :aria-expanded="open.toString()"
                    aria-controls="mobile-program"
                    class="flex w-full items-center justify-between rounded-xl px-4 py-3 text-sm font-semibold text-muted transition-colors hover:bg-brand-50 hover:text-brand-800">
                    <span class="flex items-center gap-3">
                        <x-heroicon-o-rectangle-stack class="size-5 shrink-0" />
                        Program & layanan
                    </span>
                    <x-heroicon-o-chevron-down
                        class="size-4 transition-transform"
                        ::class="{ 'rotate-180': open }" />
                </button>

                <div
                    id="mobile-program"
                    x-cloak
                    x-show="open"
                    x-transition
                    class="ml-5 border-l border-line py-1 pl-3">
                    <a
                        href="{{ route('program') }}"
                        @class([ 'block rounded-lg px-3 py-2.5 text-sm transition-colors' , 'bg-brand-50 font-semibold text-brand-800'=> request()->routeIs('program'),
                        'text-muted hover:bg-brand-50 hover:text-brand-800' => !request()->routeIs('program'),
                        ])
                        @if(request()->routeIs('program')) aria-current="page" @endif
                        @click="closeMobileMenu()"
                        >Program unggulan</a>

                    <a
                        href="{{ route('layanan') }}"
                        @class([ 'block rounded-lg px-3 py-2.5 text-sm transition-colors' , 'bg-brand-50 font-semibold text-brand-800'=> request()->routeIs('layanan'),
                        'text-muted hover:bg-brand-50 hover:text-brand-800' => !request()->routeIs('layanan'),
                        ])
                        @if(request()->routeIs('layanan')) aria-current="page" @endif
                        @click="closeMobileMenu()"
                        >Layanan</a>

                    <a
                        href="{{ route('pesantren') }}"
                        @class([ 'block rounded-lg px-3 py-2.5 text-sm transition-colors' , 'bg-brand-50 font-semibold text-brand-800'=> request()->routeIs('pesantren'),
                        'text-muted hover:bg-brand-50 hover:text-brand-800' => !request()->routeIs('pesantren'),
                        ])
                        @if(request()->routeIs('pesantren')) aria-current="page" @endif
                        @click="closeMobileMenu()"
                        >Pesantren</a>

                    <a
                        href="{{ route('santripreneur') }}"
                        @class([ 'block rounded-lg px-3 py-2.5 text-sm transition-colors' , 'bg-brand-50 font-semibold text-brand-800'=> request()->routeIs('santripreneur'),
                        'text-muted hover:bg-brand-50 hover:text-brand-800' => !request()->routeIs('santripreneur'),
                        ])
                        @if(request()->routeIs('santripreneur')) aria-current="page" @endif
                        @click="closeMobileMenu()"
                        >Santripreneur</a>
                </div>
            </div>

            {{-- Wawasan mobile --}}
            <div
                class="rounded-xl"
                x-data="{ open: {{ request()->routeIs('berita.*', 'media', 'publikasi.*') ? 'true' : 'false' }} }">
                <button
                    type="button"
                    @click="open = !open"
                    :aria-expanded="open.toString()"
                    aria-controls="mobile-wawasan"
                    class="flex w-full items-center justify-between rounded-xl px-4 py-3 text-sm font-semibold text-muted transition-colors hover:bg-brand-50 hover:text-brand-800">
                    <span class="flex items-center gap-3">
                        <x-heroicon-o-newspaper class="size-5 shrink-0" />
                        Wawasan
                    </span>
                    <x-heroicon-o-chevron-down
                        class="size-4 transition-transform"
                        ::class="{ 'rotate-180': open }" />
                </button>

                <div
                    id="mobile-wawasan"
                    x-cloak
                    x-show="open"
                    x-transition
                    class="ml-5 border-l border-line py-1 pl-3">
                    <a
                        href="{{ route('berita.index') }}"
                        @class([ 'block rounded-lg px-3 py-2.5 text-sm transition-colors' , 'bg-brand-50 font-semibold text-brand-800'=> request()->routeIs('berita.*'),
                        'text-muted hover:bg-brand-50 hover:text-brand-800' => !request()->routeIs('berita.*'),
                        ])
                        @if(request()->routeIs('berita.*')) aria-current="page" @endif
                        @click="closeMobileMenu()"
                        >Berita</a>

                    <a
                        href="{{ route('media') }}"
                        @class([ 'block rounded-lg px-3 py-2.5 text-sm transition-colors' , 'bg-brand-50 font-semibold text-brand-800'=> request()->routeIs('media'),
                        'text-muted hover:bg-brand-50 hover:text-brand-800' => !request()->routeIs('media'),
                        ])
                        @if(request()->routeIs('media')) aria-current="page" @endif
                        @click="closeMobileMenu()"
                        >Media</a>

                    <a
                        href="{{ route('publikasi.index') }}"
                        @class([ 'block rounded-lg px-3 py-2.5 text-sm transition-colors' , 'bg-brand-50 font-semibold text-brand-800'=> request()->routeIs('publikasi.*'),
                        'text-muted hover:bg-brand-50 hover:text-brand-800' => !request()->routeIs('publikasi.*'),
                        ])
                        @if(request()->routeIs('publikasi.*')) aria-current="page" @endif
                        @click="closeMobileMenu()"
                        >Publikasi</a>
                </div>
            </div>

            {{-- CTA mobile --}}
            <div class="mt-3 border-t border-line pt-4">
                <a
                    href="{{ route('program') }}"
                    class="btn btn-primary w-full justify-center"
                    @click="closeMobileMenu()">
                    Jelajahi program
                    <x-heroicon-o-arrow-right class="size-4" />
                </a>
            </div>
        </nav>
    </div>
</header>
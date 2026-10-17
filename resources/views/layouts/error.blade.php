<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="theme-color" content="#075e54">
    <meta name="color-scheme" content="light dark">

    <title>@yield('title', 'Terjadi Kesalahan | AISNU Jawa Barat')</title>
    <meta
        name="description"
        content="@yield('meta_description', 'Halaman yang diminta belum dapat ditampilkan. Silakan kembali ke beranda AISNU Jawa Barat.')">
    <meta name="robots" content="noindex, nofollow">

    <link rel="icon" href="{{ asset('favicon.ico') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body class="flex min-h-screen flex-col bg-canvas text-ink antialiased">

    <a href="#konten-utama" class="skip-link">
        Lewati ke konten utama
    </a>

    {{-- Header --}}
    <header class="border-b border-line bg-surface">
        <div class="container-site flex min-h-[4.5rem] items-center justify-between gap-4 py-3 sm:min-h-20">
            <a
                href="{{ route('beranda') }}"
                class="group inline-flex min-w-0 items-center gap-3 rounded-xl focus-visible:outline-none"
                aria-label="AISNU Jawa Barat, halaman beranda">
                <span class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-brand-700 text-[10px] font-extrabold tracking-tight text-white shadow-sm transition-transform duration-200 group-hover:scale-[1.03] sm:size-11 sm:text-xs">
                    AISNU
                </span>

                <span class="flex min-w-0 flex-col">
                    <span class="truncate text-sm font-bold leading-tight text-brand-900 sm:text-base">
                        AISNU Jawa Barat
                    </span>
                    <span class="mt-1 text-[9px] font-semibold uppercase tracking-[0.1em] text-muted sm:text-[10px] sm:tracking-[0.12em]">
                        Jabar Emas Butuh Santri Cerdas
                    </span>
                </span>
            </a>

            <a
                href="{{ route('beranda') }}"
                class="hidden min-h-10 shrink-0 items-center gap-2 rounded-xl px-3 py-2 text-sm font-semibold text-brand-700 transition-colors hover:bg-brand-50 hover:text-brand-900 focus-visible:outline-none sm:inline-flex">
                <x-heroicon-o-home class="size-4" aria-hidden="true" />
                Beranda
            </a>

            <a
                href="{{ route('beranda') }}"
                class="inline-flex size-10 shrink-0 items-center justify-center rounded-xl border border-line text-brand-700 transition-colors hover:bg-brand-50 focus-visible:outline-none sm:hidden"
                aria-label="Kembali ke beranda">
                <x-heroicon-o-home class="size-4" aria-hidden="true" />
            </a>
        </div>
    </header>

    {{-- Main error content --}}
    <main
        id="konten-utama"
        class="relative flex flex-1 items-center overflow-hidden py-12 sm:py-16 lg:py-20"
        tabindex="-1">
        {{-- Decorative background --}}
        <div
            class="pointer-events-none absolute -right-24 -top-24 size-64 rounded-full bg-brand-100/60 blur-3xl sm:size-80"
            aria-hidden="true"></div>

        <div
            class="pointer-events-none absolute -bottom-24 -left-24 size-64 rounded-full bg-accent-light/70 blur-3xl sm:size-80"
            aria-hidden="true"></div>

        <div class="container-site relative z-10">
            <section
                class="mx-auto max-w-2xl text-center"
                aria-labelledby="error-heading">
                {{-- Icon --}}
                <div class="mx-auto flex size-[4.5rem] items-center justify-center rounded-2xl border border-brand-100 bg-brand-50 text-brand-700 shadow-sm sm:size-20 sm:rounded-3xl">
                    @hasSection('icon')
                    @yield('icon')
                    @else
                    <x-heroicon-o-exclamation-triangle
                        class="size-8 sm:size-9"
                        aria-hidden="true" />
                    @endif
                </div>

                {{-- Brand label --}}
                <p class="mt-7 text-xs font-bold uppercase tracking-[0.18em] text-brand-700 sm:mt-8 sm:text-sm">
                    AISNU Jawa Barat
                </p>

                {{-- Error code --}}
                <p class="mt-3 text-5xl font-extrabold leading-none tracking-tight text-brand-800 sm:mt-4 sm:text-7xl">
                    @yield('code', 'Oops!')
                </p>

                {{-- Heading --}}
                <h1
                    id="error-heading"
                    class="mt-5 text-2xl font-bold leading-tight tracking-tight text-brand-900 sm:mt-6 sm:text-3xl lg:text-4xl">
                    @yield('heading', 'Terjadi kesalahan')
                </h1>

                {{-- Description --}}
                <p class="mx-auto mt-4 max-w-xl text-sm leading-7 text-muted sm:text-base sm:leading-8">
                    @yield('message', 'Maaf, halaman yang kamu cari belum dapat ditampilkan. Silakan coba kembali atau kunjungi beranda kami.')
                </p>

                {{-- Actions --}}
                <div class="mt-7 flex flex-col justify-center gap-3 sm:mt-8 sm:flex-row">
                    <a
                        href="{{ route('beranda') }}"
                        class="btn btn-primary w-full sm:w-auto">
                        <x-heroicon-o-home class="size-4 shrink-0" aria-hidden="true" />
                        Kembali ke beranda
                    </a>

                    <button
                        type="button"
                        onclick="if (window.history.length > 1) { window.history.back(); } else { window.location.href = {{ Illuminate\Support\Js::from(route('beranda')) }}; }"
                        class="btn btn-outline w-full sm:w-auto">
                        <x-heroicon-o-arrow-left class="size-4 shrink-0" aria-hidden="true" />
                        Halaman sebelumnya
                    </button>
                </div>

                {{-- Optional additional content --}}
                @hasSection('extra')
                <div class="mx-auto mt-8 max-w-xl border-t border-line pt-6 text-left text-sm leading-7 text-muted sm:mt-10">
                    @yield('extra')
                </div>
                @endif

                {{-- Supportive note --}}
                <div class="mt-8 flex items-center justify-center gap-2 text-xs leading-6 text-muted sm:mt-10 sm:text-sm">
                    <x-heroicon-o-information-circle
                        class="size-4 shrink-0 text-brand-500"
                        aria-hidden="true" />
                    <p>Jika masalah terus berlanjut, silakan coba beberapa saat lagi.</p>
                </div>
            </section>
        </div>
    </main>

    {{-- Footer --}}
    <footer class="border-t border-line bg-surface">
        <div class="container-site flex flex-col items-center justify-between gap-2 py-5 text-center sm:flex-row sm:py-6 sm:text-left">
            <p class="text-xs leading-6 text-muted">
                &copy; {{ date('Y') }} AISNU Jawa Barat. Hak cipta dilindungi.
            </p>

            <a
                href="{{ route('beranda') }}"
                class="inline-flex items-center gap-1.5 rounded-lg text-xs font-semibold text-brand-700 transition-colors hover:text-brand-900 focus-visible:outline-none sm:text-sm">
                Kunjungi website utama
                <x-heroicon-o-arrow-up-right class="size-3.5" aria-hidden="true" />
            </a>
        </div>
    </footer>

    @stack('scripts')
</body>

</html>
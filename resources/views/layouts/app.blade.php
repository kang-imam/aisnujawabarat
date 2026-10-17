<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="theme-color" content="#f7f9f8">
    <meta name="color-scheme" content="light dark">

    <title>@yield('title', config('app.name', 'AISNU Jawa Barat'))</title>

    <meta
        name="description"
        content="@yield('meta_description', 'Website resmi AISNU Jawa Barat sebagai pusat informasi, layanan, program, dan kegiatan organisasi.')">
    <meta name="robots" content="@yield('meta_robots', 'index, follow')">

    <link rel="canonical" href="@yield('canonical_url', url()->current())">

    {{-- Open Graph --}}
    <meta property="og:locale" content="id_ID">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:site_name" content="{{ config('app.name', 'AISNU Jawa Barat') }}">
    <meta property="og:title" content="@yield('title', config('app.name', 'AISNU Jawa Barat'))">
    <meta
        property="og:description"
        content="@yield('meta_description', 'Website resmi AISNU Jawa Barat sebagai pusat informasi, layanan, program, dan kegiatan organisasi.')">
    <meta property="og:url" content="@yield('canonical_url', url()->current())">

    @hasSection('og_image')
    <meta property="og:image" content="@yield('og_image')">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="@yield('og_image')">
    @else
    <meta name="twitter:card" content="summary">
    @endif

    {{-- Twitter --}}
    <meta name="twitter:title" content="@yield('title', config('app.name', 'AISNU Jawa Barat'))">
    <meta name="twitter:description" content="@yield('meta_description', 'Website resmi AISNU Jawa Barat.')">

    @stack('meta')

    {{-- Terapkan tema sebelum stylesheet dirender untuk mengurangi flash tema --}}
    <script>
        (() => {
            let theme = null;

            try {
                theme = localStorage.getItem('aisnu-theme');
            } catch {
                // localStorage mungkin tidak tersedia.
            }

            const prefersDark = window.matchMedia &&
                window.matchMedia('(prefers-color-scheme: dark)').matches;

            const darkMode = theme === 'dark' ?
                true :
                theme === 'light' ?
                false :
                prefersDark;

            document.documentElement.classList.toggle('dark', darkMode);
            document.documentElement.style.colorScheme = darkMode ? 'dark' : 'light';

            document.querySelector('meta[name="theme-color"]')
                ?.setAttribute('content', darkMode ? '#101815' : '#f7f9f8');
        })();
    </script>

    {{-- Stylesheet dan JavaScript melalui Laravel Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>

<body class="@yield('body_class', 'min-h-screen antialiased')">
    <a href="#konten-utama" class="skip-link">
        Lewati ke konten utama
    </a>

    @include('components.navbar')

    <main id="konten-utama" tabindex="-1">
        @yield('content')
    </main>

    @include('components.footer')

    @stack('scripts')
</body>

</html>
@props([
'eyebrow' => null,
'title',
'description' => null,
'breadcrumbs' => [],
'variant' => 'default',
'align' => 'left',
'actions' => [],
'compact' => false,
])

@php
$variants = [
'default' => [
'section' => 'border-b border-line bg-surface',
'eyebrow' => 'bg-brand-50 text-brand-700 ring-1 ring-brand-100',
'dot' => 'bg-accent',
'title' => 'text-brand-900',
'description' => 'text-muted',
'breadcrumb' => 'text-muted',
'breadcrumbCurrent' => 'text-brand-900',
],

'soft' => [
'section' => 'border-b border-line bg-brand-50',
'eyebrow' => 'bg-surface text-brand-700 ring-1 ring-line',
'dot' => 'bg-accent',
'title' => 'text-brand-900',
'description' => 'text-muted',
'breadcrumb' => 'text-muted',
'breadcrumbCurrent' => 'text-brand-900',
],

'dark' => [
'section' => 'border-b border-white/10 bg-[#032823] text-white',
'eyebrow' => 'bg-white/10 text-white ring-1 ring-white/15',
'dot' => 'bg-accent',
'title' => '!text-white',
'description' => 'text-white/75',
'breadcrumb' => 'text-white/70',
'breadcrumbCurrent' => 'text-white',
],

'accent' => [
'section' => 'border-b border-line bg-accent-light',
'eyebrow' => 'bg-surface text-brand-700 ring-1 ring-line',
'dot' => 'bg-accent',
'title' => 'text-brand-900',
'description' => 'text-muted',
'breadcrumb' => 'text-muted',
'breadcrumbCurrent' => 'text-brand-900',
],
];

$style = $variants[$variant] ?? $variants['default'];

$isCentered = $align === 'center';

$containerAlignment = $isCentered
? 'items-center text-center'
: 'items-start text-left';

$breadcrumbAlignment = $isCentered
? 'justify-center'
: 'justify-start';

$actionAlignment = $isCentered
? 'justify-center'
: 'justify-start';

$spacing = $compact
? 'py-8 sm:py-10 lg:py-12'
: 'py-12 sm:py-16 lg:py-20';

$headingId = 'page-hero-title-' . \Illuminate\Support\Str::uuid();
@endphp

<section
    class="{{ $style['section'] }} relative isolate overflow-hidden"
    aria-labelledby="{{ $headingId }}">
    {{-- Decorative background for the dark variant --}}
    @if ($variant === 'dark')
    <div
        class="pointer-events-none absolute -right-32 -top-40 size-96 rounded-full bg-brand-500/20 blur-3xl"
        aria-hidden="true"></div>

    <div
        class="pointer-events-none absolute -bottom-40 -left-32 size-96 rounded-full bg-accent/15 blur-3xl"
        aria-hidden="true"></div>

    <div
        class="pointer-events-none absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-accent/70 to-transparent"
        aria-hidden="true"></div>
    @endif

    <div class="container-site relative {{ $spacing }}">

        {{-- Breadcrumb navigation --}}
        @if (count($breadcrumbs))
        <nav
            class="mb-7"
            aria-label="Breadcrumb">
            <ol
                class="flex flex-wrap items-center gap-x-2 gap-y-2 text-xs sm:text-sm {{ $breadcrumbAlignment }} {{ $style['breadcrumb'] }}">
                <li>
                    <a
                        href="{{ route('beranda') }}"
                        class="inline-flex items-center gap-1.5 rounded-sm transition-colors hover:underline focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">
                        <x-heroicon-o-home
                            class="size-4 shrink-0"
                            aria-hidden="true" />

                        <span>Beranda</span>
                    </a>
                </li>

                @foreach ($breadcrumbs as $breadcrumb)
                <li class="inline-flex items-center gap-2">
                    <x-heroicon-o-chevron-right
                        class="size-3.5 shrink-0 opacity-50"
                        aria-hidden="true" />

                    @if (!empty($breadcrumb['url']) && !$loop->last)
                    <a
                        href="{{ $breadcrumb['url'] }}"
                        class="rounded-sm transition-colors hover:underline focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">
                        {{ $breadcrumb['label'] }}
                    </a>
                    @else
                    <span
                        @if ($loop->last) aria-current="page" @endif
                        class="{{ $loop->last ? 'font-semibold ' . $style['breadcrumbCurrent'] : '' }}"
                        >
                        {{ $breadcrumb['label'] }}
                    </span>
                    @endif
                </li>
                @endforeach
            </ol>
        </nav>
        @endif

        {{-- Hero content --}}
        <div
            class="flex max-w-4xl flex-col {{ $containerAlignment }} {{ $isCentered ? 'mx-auto' : '' }}">
            {{-- Eyebrow --}}
            @if (filled($eyebrow))
            <span
                class="mb-4 inline-flex items-center gap-2 rounded-full px-3.5 py-1.5 text-[0.6875rem] font-bold uppercase tracking-[0.14em] {{ $style['eyebrow'] }}">
                <span
                    class="size-1.5 shrink-0 rounded-full {{ $style['dot'] }}"
                    aria-hidden="true"></span>

                {{ $eyebrow }}
            </span>
            @endif

            {{-- Main heading --}}
            <h1
                id="{{ $headingId }}"
                class="max-w-4xl text-3xl font-bold leading-tight tracking-tight sm:text-4xl lg:text-5xl {{ $style['title'] }}">
                {{ $title }}
            </h1>

            {{-- Description --}}
            @if (filled($description))
            <p
                class="mt-4 max-w-3xl text-sm leading-7 sm:mt-5 sm:text-base sm:leading-8 lg:text-lg {{ $style['description'] }}">
                {{ $description }}
            </p>
            @endif

            {{-- Action buttons --}}
            @if (count($actions))
            <div
                class="mt-7 flex w-full flex-wrap gap-3 {{ $actionAlignment }} sm:mt-8">
                @foreach ($actions as $action)
                @php
                $actionStyle = $action['style'] ?? 'primary';
                $actionLabel = $action['label'] ?? 'Lihat selengkapnya';
                $actionUrl = $action['url'] ?? '#';
                $actionIcon = $action['icon'] ?? null;

                $actionClass = match ($actionStyle) {
                'outline' => $variant === 'dark'
                ? 'border border-white/25 bg-white/5 text-white hover:border-white/50 hover:bg-white/10'
                : 'btn-outline',

                'accent' => 'btn-accent',

                default => $variant === 'dark'
                ? 'bg-accent text-[#1a1a1a] hover:bg-[#edc765]'
                : 'btn-primary',
                };
                @endphp

                <a
                    href="{{ $actionUrl }}"
                    class="btn {{ $actionClass }} focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">
                    <span>{{ $actionLabel }}</span>

                    @if ($actionIcon === 'arrow-right')
                    <x-heroicon-o-arrow-right
                        class="size-4 shrink-0"
                        aria-hidden="true" />
                    @elseif ($actionIcon === 'arrow-up-right')
                    <x-heroicon-o-arrow-up-right
                        class="size-4 shrink-0"
                        aria-hidden="true" />
                    @elseif ($actionIcon === 'download')
                    <x-heroicon-o-arrow-down-tray
                        class="size-4 shrink-0"
                        aria-hidden="true" />
                    @endif
                </a>
                @endforeach
            </div>
            @endif

            {{-- Optional custom content --}}
            @if (trim((string) $slot) !== '')
            <div class="mt-7 w-full sm:mt-8">
                {{ $slot }}
            </div>
            @endif
        </div>
    </div>
</section>
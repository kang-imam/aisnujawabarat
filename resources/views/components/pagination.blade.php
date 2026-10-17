@props([
'paginator',
'showSummary' => true,
'showFirstLast' => true,
'maxLinks' => 5,
])

@php
$total = $paginator->total();
$currentPage = $paginator->currentPage();
$lastPage = $paginator->lastPage();
$firstItem = $paginator->firstItem();
$lastItem = $paginator->lastItem();

$maxLinks = max(3, (int) $maxLinks);
$window = $maxLinks - 1;

$start = max(1, $currentPage - intdiv($window, 2));
$end = min($lastPage, $start + $window);
$start = max(1, $end - $window);

$pages = $lastPage > 0
? range($start, $end)
: [];

$previousUrl = $paginator->previousPageUrl();
$nextUrl = $paginator->nextPageUrl();

$numberFormat = fn ($number) => number_format((int) $number, 0, ',', '.');

$navButtonClass = 'inline-flex min-h-11 items-center justify-center gap-2 rounded-xl border border-line bg-surface px-3 py-2 text-sm font-semibold text-brand-800 transition-colors duration-200 hover:border-brand-300 hover:bg-brand-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent dark:text-brand-700 dark:hover:border-brand-500 dark:hover:bg-brand-50 sm:px-4';

$disabledButtonClass = 'inline-flex min-h-11 cursor-not-allowed items-center justify-center gap-2 rounded-xl border border-line bg-canvas px-3 py-2 text-sm font-medium text-muted opacity-60 sm:px-4';

$pageLinkClass = 'inline-flex size-10 shrink-0 items-center justify-center rounded-xl border border-line bg-surface text-sm font-semibold text-brand-800 transition-colors duration-200 hover:border-brand-300 hover:bg-brand-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent dark:text-brand-700 dark:hover:border-brand-500 dark:hover:bg-brand-50';

$isPaginated = $lastPage > 1;
$hasSummary = $showSummary && $total > 0;
@endphp

@if ($isPaginated || $hasSummary)
<nav
    class="mt-8 border-t border-line pt-6 sm:mt-10 sm:pt-8"
    aria-label="Navigasi halaman">
    <div class="flex flex-col gap-5 sm:gap-6">

        {{-- Summary --}}
        @if ($hasSummary)
        <p class="text-center text-sm leading-6 text-muted sm:text-left">
            Menampilkan
            <span class="font-bold tabular-nums text-brand-900">
                {{ $numberFormat($firstItem ?? 0) }}
            </span>
            sampai
            <span class="font-bold tabular-nums text-brand-900">
                {{ $numberFormat($lastItem ?? 0) }}
            </span>
            dari
            <span class="font-bold tabular-nums text-brand-900">
                {{ $numberFormat($total) }}
            </span>
            data
        </p>
        @endif

        {{-- Pagination controls --}}
        @if ($isPaginated)
        <div class="flex flex-col items-center gap-5 sm:flex-row sm:justify-between">

            {{-- Previous and next --}}
            <div class="flex w-full items-center justify-between gap-3 sm:w-auto sm:justify-start">
                @if ($previousUrl)
                <a
                    href="{{ $previousUrl }}"
                    rel="prev"
                    class="{{ $navButtonClass }}">
                    <x-heroicon-o-chevron-left
                        class="size-4 shrink-0"
                        aria-hidden="true" />
                    <span>Sebelumnya</span>
                </a>
                @else
                <span
                    class="{{ $disabledButtonClass }}"
                    aria-disabled="true">
                    <x-heroicon-o-chevron-left
                        class="size-4 shrink-0"
                        aria-hidden="true" />
                    <span>Sebelumnya</span>
                </span>
                @endif

                @if ($nextUrl)
                <a
                    href="{{ $nextUrl }}"
                    rel="next"
                    class="{{ $navButtonClass }}">
                    <span>Berikutnya</span>
                    <x-heroicon-o-chevron-right
                        class="size-4 shrink-0"
                        aria-hidden="true" />
                </a>
                @else
                <span
                    class="{{ $disabledButtonClass }}"
                    aria-disabled="true">
                    <span>Berikutnya</span>
                    <x-heroicon-o-chevron-right
                        class="size-4 shrink-0"
                        aria-hidden="true" />
                </span>
                @endif
            </div>

            {{-- Page numbers --}}
            <div
                class="flex max-w-full flex-wrap items-center justify-center gap-1.5"
                role="group"
                aria-label="Pilih nomor halaman">
                {{-- First page --}}
                @if ($showFirstLast && $start > 1)
                <a
                    href="{{ $paginator->url(1) }}"
                    class="{{ $pageLinkClass }}"
                    aria-label="Halaman pertama">
                    1
                </a>

                @if ($start > 2)
                <span
                    class="inline-flex size-8 shrink-0 items-center justify-center text-sm text-muted"
                    aria-hidden="true">
                    &hellip;
                </span>
                @endif
                @endif

                {{-- Page range --}}
                @foreach ($pages as $page)
                @if ($page === $currentPage)
                <span
                    class="inline-flex size-10 shrink-0 items-center justify-center rounded-xl border border-brand-700 bg-brand-700 text-sm font-bold text-white shadow-sm dark:border-brand-500 dark:bg-brand-600 dark:text-[#10201a]"
                    aria-current="page"
                    aria-label="Halaman {{ $page }}, halaman aktif">
                    {{ $page }}
                </span>
                @else
                <a
                    href="{{ $paginator->url($page) }}"
                    class="{{ $pageLinkClass }}"
                    aria-label="Halaman {{ $page }}">
                    {{ $page }}
                </a>
                @endif
                @endforeach

                {{-- Last page --}}
                @if ($showFirstLast && $end < $lastPage)
                    @if ($end < $lastPage - 1)
                    <span
                    class="inline-flex size-8 shrink-0 items-center justify-center text-sm text-muted"
                    aria-hidden="true">
                    &hellip;
                    </span>
                    @endif

                    <a
                        href="{{ $paginator->url($lastPage) }}"
                        class="{{ $pageLinkClass }}"
                        aria-label="Halaman terakhir, halaman {{ $lastPage }}">
                        {{ $lastPage }}
                    </a>
                    @endif
            </div>
        </div>
        @endif
    </div>
</nav>
@endif
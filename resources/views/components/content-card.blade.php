@props([
'title',
'url' => null,
'image' => null,
'imageAlt' => null,
'category' => null,
'excerpt' => null,
'date' => null,
'author' => null,
'readingTime' => null,
'variant' => 'default',
'featured' => false,
'imageAspect' => 'video',
'ctaLabel' => 'Baca selengkapnya',
'external' => false,
])

@php
$cardVariant = $featured ? 'featured' : $variant;

$variants = [
'default' => [
'card' => 'flex h-full flex-col',
'imageWrap' => 'aspect-video',
'body' => 'flex flex-1 flex-col p-5 sm:p-6',
'title' => 'text-lg sm:text-xl',
'excerpt' => 'text-sm',
'imageSizes' => '(min-width: 1024px) 33vw, (min-width: 640px) 50vw, 100vw',
],

'horizontal' => [
'card' => 'grid h-full grid-cols-1 sm:grid-cols-[minmax(0,0.9fr)_minmax(0,1.1fr)]',
'imageWrap' => 'aspect-video sm:aspect-auto sm:min-h-56 sm:h-full',
'body' => 'flex min-w-0 flex-col justify-center p-5 sm:p-6 lg:p-7',
'title' => 'text-lg sm:text-xl lg:text-2xl',
'excerpt' => 'text-sm sm:text-base',
'imageSizes' => '(min-width: 640px) 40vw, 100vw',
],

'featured' => [
'card' => 'flex h-full flex-col',
'imageWrap' => 'aspect-[16/10] sm:aspect-video',
'body' => 'flex flex-1 flex-col p-5 sm:p-7 lg:p-8',
'title' => 'text-xl sm:text-2xl lg:text-3xl',
'excerpt' => 'text-sm sm:text-base',
'imageSizes' => '(min-width: 1024px) 50vw, 100vw',
],
];

$style = $variants[$cardVariant] ?? $variants['default'];

$aspectClasses = [
'video' => 'aspect-video',
'square' => 'aspect-square',
'portrait' => 'aspect-[3/4]',
'wide' => 'aspect-[16/9]',
];

$imageAspectClass = $aspectClasses[$imageAspect] ?? $aspectClasses['video'];

$hasImage = is_string($image) && trim($image) !== '';
$hasUrl = is_string($url) && trim($url) !== '';
$hasCategory = filled($category);
$hasExcerpt = filled($excerpt);
$hasAuthor = filled($author);
$hasReadingTime = filled($readingTime);

$publishedDate = $date instanceof \DateTimeInterface ? $date : null;

$displayDate = $publishedDate
? $publishedDate->format('d M Y')
: (is_string($date) && trim($date) !== '' ? $date : null);

$machineDate = $publishedDate?->format('Y-m-d');

$safeImageAlt = $imageAlt ?? $title;

$cardTitleId = 'content-card-title-' . \Illuminate\Support\Str::uuid();

$imageWrapperClass = $cardVariant === 'horizontal'
? $style['imageWrap']
: $imageAspectClass;

$imageWrapperClass .= ' relative overflow-hidden bg-brand-50 dark:bg-brand-50';

$imageObjectPosition = 'object-center';
@endphp

<article
    class="card card-interactive group {{ $style['card'] }} {{ $hasUrl ? 'cursor-pointer' : '' }}"
    @if ($hasUrl) aria-labelledby="{{ $cardTitleId }}" @endif>
    {{-- Image --}}
    <div class="{{ $imageWrapperClass }}">
        @if ($hasImage)
        <img
            src="{{ $image }}"
            alt="{{ $safeImageAlt }}"
            class="size-full object-cover {{ $imageObjectPosition }} transition-transform duration-500 ease-out motion-reduce:transform-none motion-reduce:transition-none group-hover:scale-[1.035]"
            loading="lazy"
            decoding="async"
            sizes="{{ $style['imageSizes'] }}"
            @if ($cardVariant==='horizontal' ) width="800" height="600" @else width="1200" height="675" @endif>
        @else
        <div
            class="absolute inset-0 flex items-center justify-center overflow-hidden bg-gradient-to-br from-brand-50 via-surface to-brand-100"
            aria-hidden="true">
            <div class="absolute -right-8 -top-8 size-32 rounded-full bg-brand-200/40 blur-2xl"></div>
            <div class="absolute -bottom-10 -left-8 size-36 rounded-full bg-accent/10 blur-2xl"></div>

            <div class="relative flex size-16 items-center justify-center rounded-2xl border border-brand-200/80 bg-surface/90 text-brand-600 shadow-sm sm:size-20">
                <x-heroicon-o-photo class="size-8 sm:size-10" />
            </div>
        </div>
        @endif

        {{-- Category badge --}}
        @if ($hasCategory)
        <div class="absolute inset-x-0 top-0 flex items-start justify-between gap-2 p-3 sm:p-4">
            <span class="inline-flex max-w-full items-center gap-2 rounded-lg border border-white/70 bg-white/95 px-3 py-1.5 text-[0.6875rem] font-bold uppercase tracking-wide text-brand-800 shadow-sm backdrop-blur-sm">
                <span class="size-1.5 shrink-0 rounded-full bg-accent" aria-hidden="true"></span>
                <span class="truncate">{{ $category }}</span>
            </span>

            @if ($external && $hasUrl)
            <span class="flex size-8 shrink-0 items-center justify-center rounded-full border border-white/70 bg-white/95 text-brand-700 shadow-sm" aria-label="Tautan eksternal">
                <x-heroicon-o-arrow-up-right class="size-4" aria-hidden="true" />
            </span>
            @endif
        </div>
        @elseif ($external && $hasUrl)
        <span class="absolute right-3 top-3 flex size-8 items-center justify-center rounded-full border border-white/70 bg-white/95 text-brand-700 shadow-sm sm:right-4 sm:top-4" aria-label="Tautan eksternal">
            <x-heroicon-o-arrow-up-right class="size-4" aria-hidden="true" />
        </span>
        @endif
    </div>

    {{-- Content --}}
    <div class="{{ $style['body'] }}">
        {{-- Metadata --}}
        @if ($displayDate || $hasAuthor || $hasReadingTime)
        <div class="mb-3 flex flex-wrap items-center gap-x-3 gap-y-1.5 text-xs leading-5 text-muted">
            @if ($displayDate)
            <span class="inline-flex items-center gap-1.5">
                <x-heroicon-o-calendar-days class="size-4 shrink-0 text-brand-600" aria-hidden="true" />

                @if ($machineDate)
                <time datetime="{{ $machineDate }}">{{ $displayDate }}</time>
                @else
                <span>{{ $displayDate }}</span>
                @endif
            </span>
            @endif

            @if ($hasAuthor)
            <span class="inline-flex min-w-0 items-center gap-1.5">
                <x-heroicon-o-user class="size-4 shrink-0 text-brand-600" aria-hidden="true" />
                <span class="truncate">{{ $author }}</span>
            </span>
            @endif

            @if ($hasReadingTime)
            <span class="inline-flex items-center gap-1.5">
                <x-heroicon-o-clock class="size-4 shrink-0 text-brand-600" aria-hidden="true" />
                <span>{{ $readingTime }}</span>
            </span>
            @endif
        </div>
        @endif

        {{-- Title --}}
        <h2
            id="{{ $cardTitleId }}"
            class="font-bold leading-snug tracking-tight text-brand-900 {{ $style['title'] }}">
            @if ($hasUrl)
            <a
                href="{{ $url }}"
                class="rounded-sm transition-colors duration-200 hover:text-brand-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent"
                @if ($external) target="_blank" rel="noopener noreferrer" @endif>
                {{ $title }}
            </a>
            @else
            {{ $title }}
            @endif
        </h2>

        {{-- Excerpt --}}
        @if ($hasExcerpt)
        <p class="mt-3 leading-7 text-muted {{ $style['excerpt'] }}">
            {{ $excerpt }}
        </p>
        @endif

        {{-- Custom slot --}}
        @if (trim((string) $slot) !== '')
        <div class="mt-4 text-sm leading-7 text-muted">
            {{ $slot }}
        </div>
        @endif

        {{-- Call to action --}}
        @if ($hasUrl)
        <div class="mt-auto pt-5">
            <a
                href="{{ $url }}"
                class="group/link inline-flex min-h-10 items-center gap-2 rounded-sm text-sm font-bold text-brand-700 transition-colors duration-200 hover:text-brand-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent dark:text-brand-600 dark:hover:text-brand-900"
                @if ($external) target="_blank" rel="noopener noreferrer" @endif>
                <span>{{ $ctaLabel }}</span>

                @if ($external)
                <x-heroicon-o-arrow-up-right class="size-4 shrink-0 transition-transform duration-200 group-hover/link:translate-x-0.5 group-hover/link:-translate-y-0.5 motion-reduce:transform-none" aria-hidden="true" />
                @else
                <x-heroicon-o-arrow-right class="size-4 shrink-0 transition-transform duration-200 group-hover/link:translate-x-1 motion-reduce:transform-none" aria-hidden="true" />
                @endif
            </a>
        </div>
        @endif
    </div>
</article>
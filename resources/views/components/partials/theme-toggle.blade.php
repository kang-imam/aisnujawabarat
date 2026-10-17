<div x-data="themeSwitcher">
    <button
        type="button"
        @click="toggleTheme()"
        :aria-label="darkMode ? 'Aktifkan mode terang' : 'Aktifkan mode gelap'"
        :aria-pressed="darkMode.toString()"
        title="Ubah tema"
        class="inline-flex size-10 items-center justify-center rounded-lg border border-line text-brand-800 transition-colors hover:bg-brand-50 focus-visible:outline-brand-600 dark:text-brand-700">
        <x-heroicon-o-sun
            x-cloak
            x-show="darkMode"
            class="size-5" />
        <x-heroicon-o-moon
            x-cloak
            x-show="!darkMode"
            class="size-5" />
    </button>
</div>
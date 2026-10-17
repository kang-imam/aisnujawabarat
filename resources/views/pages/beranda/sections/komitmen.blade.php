<section class="section-space bg-surface">
    <div class="container-site">
        <div class="grid gap-10 lg:grid-cols-[0.8fr_1.2fr] lg:items-start lg:gap-16">
            <div>
                <span class="section-eyebrow">
                    <span class="size-1.5 rounded-full bg-brand-600"></span>
                    Sikap dan Komitmen
                </span>

                <h2 class="section-title">
                    Pesantren harus menjadi ruang aman bagi setiap santri.
                </h2>
            </div>

            <div>
                <p class="text-base leading-8 text-muted">
                    Pesantren memiliki peran penting dalam pendidikan, pembentukan akhlak, dan pengembangan keilmuan. Karena itu, segala bentuk kekerasan di lingkungan pesantren harus menjadi perhatian serius bersama. Kekerasan seksual, khususnya, membutuhkan upaya pencegahan, keberpihakan kepada korban, pendampingan yang tepat, dan penanganan yang bertanggung jawab.
                </p>

                <p class="mt-4 text-base leading-8 text-muted">
                    AISNU Jawa Barat mendorong tumbuhnya kesadaran kolektif agar santri dapat belajar, bertumbuh, dan menjalani kehidupan pesantren tanpa rasa takut. Upaya perlindungan perlu melibatkan santri, pengasuh, pengelola pesantren, keluarga, masyarakat, dan pihak berwenang sesuai peran masing-masing.
                </p>

                <a href="{{ route('profil') }}" class="mt-6 inline-flex items-center gap-2 rounded-sm text-sm font-bold text-brand-700 transition hover:text-brand-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-brand-500">
                    Kenali AISNU Jawa Barat
                    <x-heroicon-o-arrow-right class="size-4" aria-hidden="true" />
                </a>
            </div>
        </div>

        <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            <article class="card card-interactive p-6 sm:p-7">
                <span class="flex size-12 items-center justify-center rounded-xl bg-brand-50 text-brand-700">
                    <x-heroicon-o-shield-check class="size-6" aria-hidden="true" />
                </span>

                <h3 class="mt-5 text-xl font-bold">Pencegahan kekerasan</h3>

                <p class="mt-3 text-sm leading-7 text-muted">
                    Mendorong edukasi, peningkatan kesadaran, dan penguatan budaya saling menghormati di lingkungan pendidikan pesantren.
                </p>

                <a href="{{ route('informasi') }}" class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-brand-700 hover:text-brand-900">
                    Pelajari informasi
                    <x-heroicon-o-arrow-right class="size-4" aria-hidden="true" />
                </a>
            </article>

            <article class="card card-interactive p-6 sm:p-7">
                <span class="flex size-12 items-center justify-center rounded-xl bg-amber-50 text-amber-700">
                    <x-heroicon-o-heart class="size-6" aria-hidden="true" />
                </span>

                <h3 class="mt-5 text-xl font-bold">Perlindungan korban</h3>

                <p class="mt-3 text-sm leading-7 text-muted">
                    Mengedepankan keselamatan, penghormatan terhadap martabat korban, kerahasiaan informasi, dan pendampingan yang berpihak kepada korban.
                </p>

                <a href="{{ route('kontak') }}" class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-brand-700 hover:text-brand-900">
                    Informasi dan kontak
                    <x-heroicon-o-arrow-right class="size-4" aria-hidden="true" />
                </a>
            </article>

            <article class="card card-interactive p-6 sm:p-7">
                <span class="flex size-12 items-center justify-center rounded-xl bg-brand-50 text-brand-700">
                    <x-heroicon-o-user-group class="size-6" aria-hidden="true" />
                </span>

                <h3 class="mt-5 text-xl font-bold">Solidaritas santri</h3>

                <p class="mt-3 text-sm leading-7 text-muted">
                    Memperkuat suara santri, membangun kepedulian kolektif, dan membuka ruang kolaborasi untuk mewujudkan pesantren yang lebih aman.
                </p>

                <a href="{{ route('berita.index') }}" class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-brand-700 hover:text-brand-900">
                    Ikuti gerakan
                    <x-heroicon-o-arrow-right class="size-4" aria-hidden="true" />
                </a>
            </article>
        </div>
    </div>
</section>